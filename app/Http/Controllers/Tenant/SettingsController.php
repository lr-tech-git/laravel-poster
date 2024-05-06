<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\UserInfo;
use App\Repositories\UserInfoRepository;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\View;

class SettingsController extends Controller
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * @var UserInfoRepository
     */
    private UserInfoRepository $userInfoRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository, UserInfoRepository $userInfoRepository)
    {
        $this->userRepository = $userRepository;
        $this->userInfoRepository = $userInfoRepository;

        $this->middleware('auth');
    }

    /**
     * Show user profile setting page.
     *
     * @return View
     */
    public function profile(): View
    {
        $user = $this->userRepository->getOneOrFail(auth()->id());
        if (!$profile = $this->userInfoRepository->getOne(auth()->id(), 'user_id')) {
            $profile = new UserInfo();
        }

        return view('settings/profile', compact('user', 'profile'));
    }

    /**
     * Show user security setting page.
     *
     * @return View
     */
    public function security(): View
    {
        $user = $this->userRepository->getOneOrFail(auth()->id());

        return view('settings/security', compact('user'));
    }

    /**
     * Show user notifications setting page.
     *
     * @return View
     */
    public function notification(): View
    {
        $user = $this->userRepository->getOneOrFail(auth()->id());

        return view('settings/notification', compact('user'));
    }
}
