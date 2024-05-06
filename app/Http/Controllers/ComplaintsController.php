<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Http\Requests\CreateComplaint;
use App\Http\Requests\CreateReview;
use App\Http\Requests\UpdateComplaint;
use App\Repositories\CategoryRepository;
use App\Repositories\ComplaintRepository;
use App\Repositories\ComplaintReviewsRepository;
use App\Services\ComplaintService;
use Illuminate\Contracts\View\View;
use App\Helpers\ComplaintHelper;
use Illuminate\Http\RedirectResponse;

class ComplaintsController extends Controller
{
    /**
     * @var ComplaintRepository
     */
    private ComplaintRepository $complaintRepository;

    /**
     * @var ComplaintService
     */
    private ComplaintService $complaintService;

    /**
     * @var CategoryRepository
     */
    private CategoryRepository $categoryRepository;

    /**
     * @var ComplaintReviewsRepository
     */
    private ComplaintReviewsRepository $complaintReviewsRepository;

    public function __construct(ComplaintRepository $complaintRepository,
                                ComplaintService $complaintService,
                                CategoryRepository $categoryRepository,
                                ComplaintReviewsRepository $complaintReviewsRepository
    )
    {
        $this->complaintRepository = $complaintRepository;
        $this->complaintService = $complaintService;
        $this->categoryRepository = $categoryRepository;
        $this->complaintReviewsRepository = $complaintReviewsRepository;
    }

    /**
     * Show complaints list.
     *
     * @return View
     */
    public function index(): View
    {
        $sort = [
            'field' => 'created_at',
            'direction' => 'DESC'
        ];
        $complaints = $this->complaintRepository->table([], 18, $sort);
        $categories = $this->categoryRepository->getAllForSelect();

        return view('complaints/index', compact('complaints', 'categories'));
    }

    /**
     * Complaint create page.
     *
     * @return View
     */
    public function create(): View
    {
        $complaint = new Complaint();
        $categories = ComplaintHelper::getCategoriesArray();

        return view('complaints/create', compact('complaint', 'categories'));
    }

    /**
     * Show complaint.
     *
     * @return View
     * @throws \Exception
     */
    public function show($id) : View
    {
        $complaint = $this->complaintRepository->getOneOrFail($id);
        $stats = ComplaintHelper::getReviewStats($complaint);

        return view('complaints/show', compact('complaint', 'stats'));
    }

    /**
     * Create complain review.
     *
     * @param CreateReview $request
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function review(CreateReview $request, int $id):RedirectResponse
    {
        $data = $request->validated();
        $this->complaintReviewsRepository->updateOrCreate(['user_id' => auth()->id(), 'complaint_id' => $id], ['rate' => $data['rate']]);

        return redirect()->route('complaints.show', ['id' => $id])
            ->with('success', __('complaints.your_vote_is_accepted'));
    }

    /**
     * Create complain.
     *
     * @param CreateComplaint $request
     * @return RedirectResponse
     * @throws \Exception
     */
    public function store(CreateComplaint $request): RedirectResponse
    {
        $complaint = $this->complaintService->createComplaint(
            $request->validated(),
            auth()->id(),
            $request->has('publish')
        );

        return redirect()->route('complaints.show', ['id' => $complaint->id])
            ->with('success', __('complaints.complaint_saved'));
    }

    /**
     * Create complain.
     *
     * @param mixed $id
     * @return View
     * @throws \Exception
     */
    public function edit($id): View
    {
        $complaint = $this->complaintService->prepareToUpdate(
            $this->complaintRepository->getOneOrFail($id)
        );

        $categories = ComplaintHelper::getCategoriesArray();
        return view('complaints.edit', compact('complaint', 'categories'));
    }

    /**
     * Update complain review.
     *
     * @param UpdateComplaint $request
     * @param mixed $id
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function update(UpdateComplaint $request, $id): RedirectResponse
    {
        $complaint = $this->complaintRepository->getOneOrFail($id);

        $this->complaintService->updateComplaint(
            $complaint,
            $request->validated(),
            $request->has('publish')
        );

        return redirect()->route('complaints.show', ['id' => $complaint->id])
            ->with('success', __('complaints.complaint_saved'));
    }
}
