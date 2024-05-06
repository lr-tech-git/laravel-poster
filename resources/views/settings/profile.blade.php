@extends('layouts.app-auth')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">{{ __('Home') }} / </span> {{ __('Profile') }} / {{ __('Setting') }}
        </h4>

        <div class="row">
            <div class="col-md-12">

                @include("settings._header", ['page' => 'profile', 'user' => $user])

                <form id="formAccountSettings" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card mb-4">
                        <h5 class="card-header">{{ __('Details profile') }}</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ $user->getImgSrc() }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">{{ __('Upload a new photo') }}</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        {{ Form::file('avatar', [
                                            'accept' => "image/*",
                                            'class' => 'account-file-input',
                                            'onchange'=> "getImagePreview(event)",
                                            $user->getImgSrc(),
                                            "id" => "upload",
                                            'hidden' => true
                                            ])
                                        }}
                                        {!! $errors->first('avatar', '<div class="invalid-feedback">:message</div>') !!}
                                    </label>
                                    <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">{{ __('Cancel') }}</span>
                                    </button>

                                    <p class="text-muted mb-0">{{ __('JPG, GIF or PNG are allowed. Maximum size 800K') }}</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    {{ Form::label(__("Name")) }}
                                    {{ Form::text('first_name', $profile->first_name, ['placeholder' => "Name", 'class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : '')]) }}
                                    {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{ Form::label(__("Surname")) }}
                                    {{ Form::text('last_name', $profile->last_name, ['placeholder' => "Surname", 'class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : '')]) }}
                                    {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{ Form::label(__("E-mail")) }}
                                    {{ Form::text('email', $user->email, ['placeholder' => "john.doe@example.com", 'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) }}
                                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{ Form::label(__("Phone number") }}
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">UA (+380)</span>
                                        {{ Form::text('phone_number', $profile->phone_number, ['placeholder' => "Phone number", 'class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : '')]) }}
                                    </div>
                                    {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{ Form::label(__("Address")) }}
                                    {{ Form::text('address', $profile->address, ['placeholder' => "Address", 'class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : '')]) }}
                                    {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="language" class="form-label">{{ __("Language") }}</label>
                                    <select id="language" class="select2 form-select">
                                        <option value="">{{ __("Chose language") }}</option>
                                        <option value="en">{{ __("English") }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">{{ __("Save") }}</button>
                                <button type="reset" class="btn btn-label-secondary">{{ __("Cancel") }}</button>
                            </div>
                        </div>
                        <!-- /Account -->
                    </div>
                </form>
                <div class="card">
                    <h5 class="card-header">{{ __("Delete account") }}</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-medium mb-1">{{ __("Are you sure you want to delete your account?") }}</h6>
                                <p class="mb-0">{{ __("Once an account is deleted, there is no going back. Please be sure.") }}</p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">{{ __("I confirm the deactivation of my account") }}</label>
                            </div>
                            <button type="submit" class="btn btn-danger deactivate-account">{{ __("Deactivate account") }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        upload.onchange = evt => {
            preview = document.getElementById('uploadedAvatar');
            preview.style.display = 'block';
            const [file] = upload.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>

@endsection
