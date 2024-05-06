<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ComplaintRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;

class ComplaintsController extends Controller
{
    /**
     * @var ComplaintRepository
     */
    private ComplaintRepository $complaintRepository;

    public function __construct(ComplaintRepository $complaintRepository)
    {
        $this->complaintRepository = $complaintRepository;
    }

    /**
     * Admin complaints page.
     *
     * @return View
     */
    public function index(): View
    {
        /** @var LengthAwarePaginator */
        $complaints = $this->complaintRepository->table();

        return view('admin.complaints.index', compact('complaints'));
    }
}
