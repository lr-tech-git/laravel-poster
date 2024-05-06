<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

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

        return view('profile/show', [
            'user' => $user
        ]);
    }
}
