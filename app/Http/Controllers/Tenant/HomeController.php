<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        return view('tenant/home', [
            'tenant' => tenant()->name
        ]);
    }

    /**
     * Show the FAQ page.
     *
     * @return View
     */
    public function faq(): View
    {
        return view('tenant/faq', [
            'tenant' => tenant()->name
        ]);
    }

    /**
     * Show the contact page.
     *
     * @return View
     */
    public function contact(): View
    {
        return view('tenant/contact', [
            'tenant' => tenant()->name
        ]);
    }
}
