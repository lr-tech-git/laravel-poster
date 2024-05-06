@extends('layouts.landing')

@section('content')

    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <img src="/img/hero-bg.png" alt="hero background" class="position-absolute top-0 start-50 translate-middle-x object-fit-contain w-100 h-100" data-speed="1" />
                <div class="container">
                    <div class="hero-text-box text-center">
                        <h1 class="text-primary hero-title display-4 fw-bold">«MyCity» <br /> {{ __('make the city better!') }}</h1>
                        <h2 class="hero-sub-title h6 mb-4 pb-1">
                            {!! __('a project designed to improve the quality of life of city residents<br class="d-none d-lg-block" />
                            with the help of active residents.') !!}
                        </h2>
                        <div class="landing-hero-btn d-inline-block position-relative">
                            <a href="{{ route('login') }}" class="btn btn-primary">{{ __('welcome.report_problem') }}</a>
                        </div>
                    </div>
                    <div id="heroDashboardAnimation" class="hero-animation-img">
                        <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                            <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                                <img src="/img/hero-dashboard-light.png" alt="hero dashboard" class="animation-img" data-app-light-img="hero-dashboard-light.png" data-app-dark-img="hero-dashboard-dark.png" />
                                <img src="/img/hero-elements-light.png" alt="hero elements" class="position-absolute hero-elements-img animation-img top-0 start-0" data-app-light-img="hero-elements-light.png" data-app-dark-img="hero-elements-dark.png" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="landing-hero-blank"></div>
        </section>
        <!-- Hero: End -->

        <!-- Useful features: Start -->
        <section id="landingFeatures" class="section-py landing-features">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">{{ __('The main problems') }}</span>
                </div>
                <h3 class="text-center mb-1">{{ __('Top problematic topics') }}</h3>
                <p class="text-center mb-3 mb-md-5 pb-3">
                    {!! __('Restoring lighting, repairing an elevator, removing garbage, <br>repairing road signs - these are just some of the problems that our portal will help solve.') !!}
                </p>
                <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="/img/laptop.png" alt="laptop charging" />
                        </div>
                        <h5 class="mb-3">{{ __('Court') }}</h5>
                        <p class="features-icon-description">
                            {{ __('The territory is not cleaned, Parking on the sidewalk, Broken playground..') }}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="/img/rocket.png" alt="transition up" />
                        </div>
                        <h5 class="mb-3">{{ __('Street') }}</h5>
                        <p class="features-icon-description">
                            {{ __('Improper driving of a car, a broken traffic sign, potholes on the road...') }}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="/img/paper.png" alt="edit" />
                        </div>
                        <h5 class="mb-3">{{ __('Public transport') }}</h5>
                        <p class="features-icon-description">
                            {{ __('Violation of schedule, Improper state of transport, Improper state of stop...') }}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="/img/check.png" alt="3d select solid" />
                        </div>
                        <h5 class="mb-3">{{ __('House') }}</h5>
                        <p class="features-icon-description">
                            {{ __('No lighting, non-working elevator, improper condition of the staircase...') }}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="/img/user.png" alt="lifebelt" />
                        </div>
                        <h5 class="mb-3">{{ __('Medical institution') }}</h5>
                        <p class="features-icon-description">
                            {{ __('Inadequate service delivery, No ramp, Impossible to get to appointment...') }}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="/img/keyboard.png" alt="google docs" />
                        </div>
                        <h5 class="mb-3">{{ __('Trade') }}</h5>
                        <p class="features-icon-description">
                            {{ __('Flea market, Expired products...') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Useful features: End -->

        <!-- Real customers reviews: Start -->
        <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
            <!-- What people say slider: Start -->
            <div class="container">
                <div class="row align-items-center gx-0 gy-4 g-lg-5">
                    <div class="col-md-6 col-lg-5 col-xl-3">
                        <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">{{ __('Real Customers Reviews') }}</span>
                        </div>
                        <h3 class="mb-1">{{ __('What people say') }}</h3>
                        <p class="mb-3 mb-md-5">
                            {!! __('See what our customers have to<br class="d-none d-xl-block" />
                            say about their experience.') !!}
                        </p>
                        <div class="landing-reviews-btns d-flex align-items-center gap-3">
                            <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn" type="button">
                                <i class="bx bx-chevron-left bx-sm"></i>
                            </button>
                            <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn" type="button">
                                <i class="bx bx-chevron-right bx-sm"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-9">
                        <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                            <div class="swiper" id="swiper-reviews">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="/img/logo-1.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    {{ __('“Vuexy is hands down the most useful front end Bootstrap theme I/\'ve ever used. I can/\'t wait
                                                    to use it again for my next project.”') }}
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ __('Cecilia Payne') }}</h6>
                                                        <p class="small text-muted mb-0">{{ __('CEO of Airbnb') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="/img/logo-2.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    {{ __('“I/\'ve never used a theme as versatile and flexible as Vuexy. It/\'s my go to for building
                                                    dashboard sites on almost any project.”') }}
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ __('Eugenia Moore') }}</h6>
                                                        <p class="small text-muted mb-0">{{ __('Founder of Hubspot') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="/img/logo-3.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    {{ __('This template is really clean & well documented. The docs are really easy to understand and
                                                    it/\'s always easy to find a screenshot from their website.') }}
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ __('Curtis Fletcher') }}</h6>
                                                        <p class="small text-muted mb-0">{{ __('Design Lead at Dribbble') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="/img/logo-4.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    {{ __('All the requirements for developers have been taken into consideration, so I’m able to build
                                                    any interface I want.') }}
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bx-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ __('Sara Smith') }}</h6>
                                                        <p class="small text-muted mb-0">{{ __('Founder of Continental') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="/img/logo-5.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    {{ __("“I've never used a theme as versatile and flexible as Vuexy. It's my go to for building
                                                    dashboard sites on almost any project.”") }}
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ __('Eugenia Moore') }}</h6>
                                                        <p class="small text-muted mb-0">{{ __('Founder of Hubspot') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="/img/logo-6.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo mollitia, ad eum officia numquam nostrum repellendus consequuntur!') }}
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bx-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Sara Smith</h6>
                                                        <p class="small text-muted mb-0">{{ __('Founder of Continental') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- What people say slider: End -->
            <hr class="m-0" />
            <!-- Logo slider: Start -->
            <div class="container">
                <div class="swiper-logo-carousel py-4 my-lg-2">
                    <div class="swiper" id="swiper-clients-logos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/img/logo_1-light.png" alt="client logo" class="client-logo" data-app-light-img="logo_1-light.png" data-app-dark-img="logo_1-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/logo_2-light.png" alt="client logo" class="client-logo" data-app-light-img="logo_2-light.png" data-app-dark-img="logo_2-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/logo_3-light.png" alt="client logo" class="client-logo" data-app-light-img="logo_3-light.png" data-app-dark-img="logo_3-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/logo_4-light.png" alt="client logo" class="client-logo" data-app-light-img="logo_4-light.png" data-app-dark-img="logo_4-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/logo_5-light.png" alt="client logo" class="client-logo" data-app-light-img="logo_5-light.png" data-app-dark-img="logo_5-dark.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logo slider: End -->
        </section>
        <!-- Real customers reviews: End -->

        <!-- Our great team: Start -->
        <section id="landingTeam" class="section-py landing-team">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">{{ __('Our Great Team') }}</span>
                </div>
                <h3 class="text-center mb-1">{{ __('Supported by Real People') }}</h3>
                <p class="text-center mb-md-5 pb-3">{{ __('Who is behind these great-looking interfaces?') }}</p>
                <div class="row gy-5 mt-2">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-primary position-relative team-image-box">
                                <img src="/img/team-member-1.png" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-primary text-center">
                                <h5 class="card-title mb-0">{{ __('Sophie Gilbert') }}</h5>
                                <p class="text-muted mb-0">{{ __('Project Manager') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-info position-relative team-image-box">
                                <img src="/img/team-member-2.png" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-info text-center">
                                <h5 class="card-title mb-0">{{ __('Paul Miles') }}</h5>
                                <p class="text-muted mb-0">{{ __('UI Designer') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-danger position-relative team-image-box">
                                <img src="/img/team-member-3.png" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-danger text-center">
                                <h5 class="card-title mb-0">{{ __('Nannie Ford') }}</h5>
                                <p class="text-muted mb-0">{{ __('Development Lead') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-success position-relative team-image-box">
                                <img src="/img/team-member-4.png" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-success text-center">
                                <h5 class="card-title mb-0">{{ __('') }}Chris Watkins</h5>
                                <p class="text-muted mb-0">{{ __('Marketing Manager') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our great team: End -->

        <!-- Pricing plans: Start -->
        <section id="landingPricing" class="section-py bg-body landing-pricing">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">{{ __('Pricing Plans') }}</span>
                </div>
                <h3 class="text-center mb-1">{{ __('Tailored pricing plans designed for you') }}</h3>
                <p class="text-center mb-4 pb-3">
                    {{ __('All plans include 40+ advanced tools and features to boost your product.<br />Choose the best plan to fit
                    your needs.') }}
                </p>
                <div class="text-center mb-5">
                    <div class="position-relative d-inline-block pt-3 pt-md-0">
                        <label class="switch switch-primary me-0">
                            <span class="switch-label">{{ __('Pay Monthly') }}</span>
                            <input type="checkbox" class="switch-input price-duration-toggler" checked />
                            <span class="switch-toggle-slider">
              <span class="switch-on"></span>
              <span class="switch-off"></span>
            </span>
                            <span class="switch-label">{{ __('Pay Annual') }}</span>
                        </label>
                        <div class="pricing-plans-item position-absolute d-flex">
                            <img src="/img/pricing-plans-arrow.png" alt="pricing plans arrow" class="scaleX-n1-rtl" />
                            <span class="fw-medium mt-2 ms-1"> Save 25%</span>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 pt-lg-3">
                    <!-- Basic Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="/img/paper-airplane.png" alt="paper airplane icon" class="mb-4 pb-2 scaleX-n1-rtl" />
                                    <h4 class="mb-1">{{ __('Basic') }}</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="price-monthly h1 text-primary fw-bold mb-0">$19</span>
                                        <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$14</span>
                                        <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                    </div>
                                    <div class="position-relative pt-2">
                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$ 168 / year</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Timeline') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Basic search') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Live chat widget') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Email marketing') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Custom Forms') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Traffic analytics') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Basic Support') }}
                                        </h5>
                                    </li>
                                </ul>
                                <div class="d-grid mt-4 pt-3">
                                    <a href="payment-page.html" class="btn btn-label-primary">{{ __('Get Started') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Plan: End -->

                    <!-- Favourite Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card border border-primary shadow-lg">
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="../../assets/img/front-pages/icons/plane.png" alt="plane icon" class="mb-4 pb-2 scaleX-n1-rtl" />
                                    <h4 class="mb-1">{{ __('Team') }}</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="price-monthly h1 text-primary fw-bold mb-0">$29</span>
                                        <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$22</span>
                                        <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                    </div>
                                    <div class="position-relative pt-2">
                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$ 264 / year</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Everything in basic') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Timeline with database') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Advanced search') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Marketing automation') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Advanced chatbot') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Campaign management') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Collaboration tools') }}
                                        </h5>
                                    </li>
                                </ul>
                                <div class="d-grid mt-4 pt-3">
                                    <a href="payment-page.html" class="btn btn-primary">{{ __('Get Started') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Favourite Plan: End -->

                    <!-- Standard Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="../../assets/img/front-pages/icons/shuttle-rocket.png" alt="shuttle rocket icon" class="mb-4 pb-2 scaleX-n1-rtl" />
                                    <h4 class="mb-1">{{ __('Enterprise') }}</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="price-monthly h1 text-primary fw-bold mb-0">$49</span>
                                        <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$37</span>
                                        <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                    </div>
                                    <div class="position-relative pt-2">
                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$ 444 / year</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Everything in premium') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Timeline with database') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Fuzzy search') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('A/B testing sanbox') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Custom permissions') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Social media automation') }}
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                            {{ __('Sales automation tools') }}
                                        </h5>
                                    </li>
                                </ul>
                                <div class="d-grid mt-4 pt-3">
                                    <a href="payment-page.html" class="btn btn-label-primary">{{ __('Get Started') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Standard Plan: End -->
                </div>
            </div>
        </section>
        <!-- Pricing plans: End -->

        <!-- Fun facts: Start -->
        <section id="landingFunFacts" class="section-py landing-fun-facts">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-primary shadow-none">
                            <div class="card-body text-center">
                                <img src="/img/laptop.png" alt="laptop" class="mb-2" />
                                <h5 class="h2 mb-1">7.1k+</h5>
                                <p class="fw-medium mb-0">
                                    {!! __('Support Tickets<br /> Resolved') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-success shadow-none">
                            <div class="card-body text-center">
                                <img src="/img/user-success.png" alt="laptop" class="mb-2" />
                                <h5 class="h2 mb-1">50k+</h5>
                                <p class="fw-medium mb-0">
                                    {!! __('Join creatives<br /> community') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-info shadow-none">
                            <div class="card-body text-center">
                                <img src="/img/diamond-info.png" alt="laptop" class="mb-2" />
                                <h5 class="h2 mb-1">4.8/5</h5>
                                <p class="fw-medium mb-0">
                                    {!! __('Highly Rated<br /> Products') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-warning shadow-none">
                            <div class="card-body text-center">
                                <img src="/img/check-warning.png" alt="laptop" class="mb-2" />
                                <h5 class="h2 mb-1">100%</h5>
                                <p class="fw-medium mb-0">
                                    {!! __('Money Back<br /> Guarantee') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fun facts: End -->

        <!-- FAQ: Start -->
        <section id="landingFAQ" class="section-py bg-body landing-faq">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">{{ __('FAQ') }}</span>
                </div>
                <h3 class="text-center mb-1">{{ __('Frequently asked questions') }}</h3>
                <p class="text-center mb-5 pb-3">{{ __('Browse through these FAQs to find answers to commonly asked questions.') }}</p>
                <div class="row gy-5">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="/img/faq-boy-with-logos.png" alt="faq boy with logos" class="faq-image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="accordion" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                        {{ __('Do you charge for each upgrade?') }}
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ __('Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                                        marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                        soufflé. Wafer gummi bears marshmallow pastry pie.') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                        {{ __('Do I need to purchase a license for each website?') }}
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ __('Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                                        dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                                        beans candy canes carrot cake. Fruitcake chocolate chupa chups.') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                        {{ __('What is regular license?') }}
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ __('Regular license can be used for end products that do not charge users for access or service(access
                                        is free and there will be no monthly subscription fee). Single regular license can be used for
                                        single end product and end product can be used by you or your client. If you want to sell end
                                        product to multiple clients then you will need to purchase separate license for each client. The
                                        same rule applies if you want to use the same end product on multiple domains(unique setup). For
                                        more info on regular license you can check official description.') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                        {{ __('What is extended license?') }}
                                    </button>
                                </h2>
                                <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                                        Mollitia reprehenderit neque repellat delenibx delectus architecto dolorum maxime, blanditiis
                                        earum ea, incidunt quam possimus cumque.') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                        {{ __('Which license is applicable for SASS application?') }}
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ __('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                                        nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                                        labore enim architecto non!') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ: End -->

        <!-- CTA: Start -->
        <section id="landingCTA" class="section-py landing-cta position-relative p-lg-0 pb-0">
            <img src="/img/cta-bg-light.png" class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1" alt="cta image" data-app-light-img="cta-bg-light.png" data-app-dark-img="cta-bg-dark.png" />
            <div class="container">
                <div class="row align-items-center gy-5 gy-lg-0">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h6 class="h2 text-primary fw-bold mb-1">{{ __('Ready to Get Started?') }}</h6>
                        <p class="fw-medium mb-4">{{ __('Start your project with a 14-day free trial') }}</p>
                        <a href="payment-page.html" class="btn btn-primary">{{ __('Get Started') }}</a>
                    </div>
                    <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
                        <img src="/img/cta-dashboard.png" alt="cta dashboard" class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA: End -->

        <!-- Contact Us: Start -->
        <section id="landingContact" class="section-py bg-body landing-contact">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">{{ __('Contact US') }}</span>
                </div>
                <h3 class="text-center mb-1">{{ __('Let/\'s work together') }}</h3>
                <p class="text-center mb-4 mb-lg-5 pb-md-3">{{ __('Any question or remark? just write us a message') }}</p>
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="contact-img-box position-relative border p-2 h-100">
                            <img src="/img/contact-border.png" alt="contact border" class="contact-border-img position-absolute d-none d-md-block scaleX-n1-rtl" />
                            <img src="/img/contact-customer-service.png" alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />
                            <div class="pt-3 px-4 pb-1">
                                <div class="row gy-3 gx-md-4">
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="d-flex align-items-center">
                                            <div class="badge bg-label-primary rounded p-2 me-2"><i class="bx bx-envelope bx-sm"></i></div>
                                            <div>
                                                <p class="mb-0">{{ __('Email') }}</p>
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
                                                <p class="mb-0">{{ __('Phone') }}</p>
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
                                <h4 class="mb-1">{{ __('Send a message') }}</h4>
                                <p class="mb-4">
                                    {!! __('If you would like to discuss anything related to payment, account, licensing,<br class="d-none d-lg-block" />
                                    partnerships, or have pre-sales questions, you’re at the right place.') !!}
                                </p>
                                <form>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-fullname">{{ __('Full Name') }}</label>
                                            <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-email">{{ __('Email') }}</label>
                                            <input type="text" id="contact-form-email" class="form-control" placeholder="johndoe@gmail.com" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="contact-form-message">{{ __('Message') }}</label>
                                            <textarea id="contact-form-message" class="form-control" rows="9" placeholder="{{ __('Write a message') }}"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">{{ __('Send inquiry') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->
@endsection
