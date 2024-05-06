@extends('layouts.app-auth')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Profile / </span> Profile / Security
        </h4>

        <div class="row">
            <div class="col-md-12">

                @include("settings._header", ['page' => 'security', 'user' => $user])

                <!-- Change Password -->
                <div class="card mb-4">
                    <h5 class="card-header">{{ __('Change password') }}</h5>
                    <div class="card-body">
                        <form id="formAccountSettings" method="GET" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="currentPassword">{{ __('Current password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="currentPassword" id="currentPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="newPassword">{{ __('New password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="confirmPassword">{{ __('Confirm new password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <p class="fw-medium mt-2">{{ __('Password requirements') }}:</p>
                                    <ul class="ps-3 mb-0">
                                        <li class="mb-1">
                                            {{ __('Minimum of 8 characters - the more, the better') }}
                                        </li>
                                        <li class="mb-1">{{ __('At least one lower case') }}</li>
                                        <li>{{ __('At least one number, character, or space') }}</li>
                                    </ul>
                                </div>
                                <div class="col-12 mt-1">
                                    <button type="submit" class="btn btn-primary me-2">{{ __('Save changes') }}</button>
                                    <button type="reset" class="btn btn-label-secondary">{{ __('Cancel') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/ Change Password -->

                <!-- Two-steps verification -->
                <div class="card mb-4">
                    <h5 class="card-header">{{ __('Two-step verification') }}</h5>
                    <div class="card-body">
                        <h5 class="mb-3">{{ __('Two-factor authentication is not yet enabled.') }}</h5>
                        <p class="w-75">{{ __('Two-factor authentication adds an extra layer of security to your account by requiring more than just a password to log in.') }}
                            <a href="javascript:void(0);">{{ __('Read more.') }}</a>
                        </p>
                        <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#enableOTP">{{ __('Enable two-factor authentication') }}</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
