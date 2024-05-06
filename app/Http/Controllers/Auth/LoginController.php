<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Stancl\Tenancy\Database\Models\ImpersonationToken;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        if (!tenant()) {
            $tenant = Tenant::find(auth()->user()->tenant_id);
            $token = tenancy()->impersonate($tenant, auth()->user()->id, '/');
            $domain = $tenant->domain->domain;
            $this->redirectTo = "http://$domain/impersonate/{$token->token}";

            Auth::logout();
        }

        return $this->redirectTo;
    }
}
