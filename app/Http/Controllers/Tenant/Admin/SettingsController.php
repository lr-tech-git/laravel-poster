<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ComplaintRepository;
use Illuminate\Contracts\View\View;

class SettingsController extends Controller
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
     * Admin main settings page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.settings.index');
    }

    /**
     * Admin settings notification page.
     *
     * @return View
     */
    public function notifications(): View
    {
        return view('admin.settings.notifications');
    }
}
