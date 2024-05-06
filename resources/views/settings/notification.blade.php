@extends('layouts.app-auth')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">{{ __("Home") }} / </span> {{ __("Profile") }} / {{ __("Notifications") }}
        </h4>

        <div class="row">
            <div class="col-md-12">

                @include("settings._header", ['page' => 'notification', 'user' => $user])

                <div class="card">
                    <!-- Notifications -->
                    <h5 class="card-header">{{ __("Recent Devices") }}</h5>
                    <div class="card-body">
                        <span>{{ __("We need permission from your browser to show notifications.") }} <span class="notificationRequest"><span class="fw-medium">{{ __("Request Permission.") }} </span></span></span>
                        <div class="error"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless border-bottom">
                            <thead>
                            <tr>
                                <th class="text-nowrap">{{ __("Type") }}</th>
                                <th class="text-nowrap text-center">✉️ {{ __("Email") }}</th>
                                <th class="text-nowrap text-center">🖥 {{ __("Browser") }}</th>
                                <th class="text-nowrap text-center">👩🏻‍💻 {{ __("App") }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-nowrap">{{ __("New for you") }}</td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">Account activity</td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">A new browser used to sign in</td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">A new device is linked</td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <h6>{{ __("When should we send you notifications?") }}</h6>
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select id="sendNotification" class="form-select" name="sendNotification">
                                        <option selected>{{ __("Only when I'm online") }}</option>
                                        <option>{{ __("Anytime") }}</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary me-2">{{ __("Save changes") }}</button>
                                    <button type="reset" class="btn btn-label-secondary">{{ __("Discard") }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /Notifications -->
                </div>
            </div>
        </div>


    </div>
    <!-- / Content -->


@endsection




