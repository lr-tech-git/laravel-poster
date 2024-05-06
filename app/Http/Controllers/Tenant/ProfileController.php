<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfile;
use App\Repositories\ComplaintRepository;
use App\Repositories\UserRepository;
use App\Services\Tenant\ProfileService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * @var ComplaintRepository
     */
    private ComplaintRepository $complaintRepository;

    /**
     * @var ProfileService
     */
    private ProfileService $profileService;

    public function __construct(ComplaintRepository $complaintRepository, UserRepository $userRepository, ProfileService $profileService)
    {
        $this->complaintRepository = $complaintRepository;
        $this->userRepository = $userRepository;
        $this->profileService = $profileService;

        $this->middleware('auth');
    }

    /**
     * Show profile page.
     *
     * @param null|int $userId
     * @return View
     */
    public function show(int $userId = null): View
    {
        $user = $this->userRepository->getOneOrFail($userId ?? auth()->id());
        return view('profile/show', compact('user'));
    }

    /**
     * Update profile.
     *
     * @param UpdateProfile $request
     *
     * @return RedirectResponse
     */
    public function update(UpdateProfile $requests): RedirectResponse
    {
        $data = $requests->validated();
        $user = $this->userRepository->getOneOrFail(auth()->id());

        $this->profileService->saveProfile($user, $data);

        return redirect()->route('profile.show')
            ->with('success', __('profile.success_updated'));
    }

    /**
     * Show profile complaints by user.
     *
     * @param null|int $userId
     * @return View
     */
    public function complaints(int $userId = null): View
    {
        $user = $this->userRepository->getOneOrFail($userId ?? auth()->id());
        $complaints = $this->complaintRepository->table([
            'filters' => [
                'user_id' => $user->id
            ]
        ]);

        return view('profile/complaints', compact('complaints', 'user'));
    }
}
