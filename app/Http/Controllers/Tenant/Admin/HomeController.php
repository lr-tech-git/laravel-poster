<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ComplaintRepository;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * @var ComplaintRepository
     */
    private ComplaintRepository $complaintRepository;

    public function __construct(ComplaintRepository $complaintRepository, UserRepository $userRepository)
    {
        $this->complaintRepository = $complaintRepository;
        $this->userRepository = $userRepository;
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

        /** @var LengthAwarePaginator Top 4 users list */
        $users = $this->userRepository->table([], 4, ['field' => 'created_at', 'direction' => 'DESC']);

        return view('admin.dashboard', compact('complaints', 'users'));
    }
}
