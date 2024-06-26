
@extends('layouts.app-auth')

<style>
    .faq-header {
        background: url("/img/header.png");
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 300px !important;
        border-radius: .375rem
    }

    .faq-header .input-wrapper {
        position: relative;
        width: 100%;
        max-width: 55%
    }

    @media(max-width: 575.98px) {
        .faq-header .input-wrapper {
            max-width:70%
        }
    }

    .faq-nav-icon {
        font-size: 1.25rem
    }

    .light-style .bg-faq-section {
        background-color: rgba(67,89,113,.05)
    }

    .dark-style .bg-faq-section {
        background-color: rgba(255,255,255,.03)
    }

</style>

@section('content')


    <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary"></span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">{{ __("Let's work") }}</span> {{ __("together") }}</h3>
            <p class="text-center mb-4 mb-lg-5 pb-md-3">{{ __("Any question or remark? just write us a message") }}</p>
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="contact-img-box position-relative border p-2 h-100">
                        <img src="/img/contact-customer-service.png" alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl img-fluid">
                        <div class="pt-3 px-4 pb-1">
                            <div class="row gy-3 gx-md-4">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-primary rounded p-2 me-2"><i class="bx bx-envelope bx-sm"></i></div>
                                        <div>
                                            <p class="mb-0">{{ __("Email") }}</p>
                                            <h5 class="mb-0">
                                                <a href="mailto:example@gmail.com" class="text-heading">example@gmail.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-success rounded p-2 me-2">
                                            <i class="bx bx-phone-call bx-sm"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">{{ __("Phone") }}</p>
                                            <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-1">{{ __("Send a message") }}</h4>
                            <p class="mb-4">
                                {{ __('If you would like to discuss anything related to payment, account, licensing,<br class="d-none d-lg-block">
                                partnerships, or have pre-sales questions, you’re at the right place.') }}
                            </p>
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact-form-fullname">{{ __("Full Name") }}</label>
                                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="john">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact-form-email">{{ __("Email") }}</label>
                                        <input type="text" id="contact-form-email" class="form-control" placeholder="johndoe@gmail.com">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="contact-form-message">{{ __("Message") }}</label>
                                        <textarea id="contact-form-message" class="form-control" rows="9" placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">{{ __("Send inquiry") }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
