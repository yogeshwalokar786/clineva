@extends('layouts.app')

@section('title', 'Events Calendar - Clineva')

@section('content')
<div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Events Calendar
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Events Calendar</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <div class="features-list mt-30">
                 <div class="mx-30">
                    <div class="swiper tf-swiper sw-features" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "pagination": { "el": ".sw-pagination-features", "clickable": true },
                        "breakpoints": {
                            "767": { "slidesPerView": 2, "slidesPerGroup": 1},
                            "1200": { "slidesPerView": 3, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="features-item style-3 style-3-2 style-bg-gray-dark px-mobile-lg">
                                    <div class="item-content">
                                        <div class="top-item flex align-items-center g-30">
                                            <div class="icon">
                                                <i class="icon-schedule-hours"></i>
                                            </div>
                                            <h3 class="title"><a href="#">Schedule Hours</a></h3>
                                        </div>
                                        <ul>
                                            <li>
                                                <span class="body-2 fw6">Monday – Friday</span>
                                                <span class="body-2 fw6">08am - 09pm</span>
                                            </li>
                                            <li>
                                                <span class="body-2 fw6">Saturday</span>
                                                <span class="body-2 fw6">09am - 10pm</span>
                                            </li>
                                            <li>
                                                <span class="body-2 fw6">Sunday</span>
                                                <span class="body-2 fw6">07am - 08pm</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-black hover-boder-color-title">
                                            <span>24/7 hours emergency services</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-3 style-3-2 style-bg-gray-light px-mobile-lg">
                                    <div class="item-content">
                                        <div class="top-item flex align-items-center g-30">
                                            <div class="icon">
                                                <i class="icon-our-location"></i>
                                            </div>
                                            <h3 class="title"><a href="#">Our Location</a></h3>
                                        </div>
                                        <h6 class="mb-15 color-title">Main Location</h6>
                                        <div class="text body-2 lh-30 fw5 color-title">70 Washington Square South, New York, NY 10012, United States</div>
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small hover-boder-color-title">
                                            <span>Explore All Healthcare Facilities</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-3 style-3-2 style-bg-5 px-mobile-lg">
                                    <div class="item-content">
                                        <div class="top-item flex align-items-center g-30">
                                            <div class="icon">
                                                <i class="icon-schedule"></i>
                                            </div>
                                            <h3 class="title"><a href="#">Make Appointment</a></h3>
                                        </div>
                                        <div class="text mb-20 body-2 lh-30">You can easily book your appointment online, call our office.</div>
                                        <div class="number-phone">
                                            <div class="number-phone-icon">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <span>Call Us Today : <a href="tel:+00012345688" class="fw7">+1 (234) 568 0000</a></span>
                                        </div>
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-black hover-boder-color-title">
                                            <span>Request For Appointment</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-features sw-pagination d-xl-none mt-15 justify-content-center"></div>
                    </div>
                </div>
            </div>

            <section class="section-calendar tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section mb-50 text-center">
                                <h6 class="sub-title mb-10 text-anime">
                                    Event Calendar
                                </h6>
                                <h2 class="title text-anime">
                                    Ultimate Event Calendar
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="wg-tab mb-50">
                                <ul class="tab-product" role="tablist">
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab1" data-bs-toggle="tab" role="tab" class="active" aria-selected="true">All Events</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab2" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Neurology</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab3" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Medicine</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab4" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Dental</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab5" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Health</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab6" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Eye Care</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab7" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Child Care</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flat-animate-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab1" role="tabpanel">
                            <div class="table-calendar">
                                <div class="tf-container">
                                    <div class="calendar-scroll">
                                        <div class="calendar-table calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <div class="table-calendar">
                                <div class="tf-container">
                                    <div class="calendar-scroll">
                                        <div class="calendar-table calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel">
                            <div class="table-calendar">
                                <div class="tf-container">
                                    <div class="calendar-scroll">
                                        <div class="calendar-table calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4" role="tabpanel">
                            <div class="table-calendar">
                                <div class="tf-container">
                                    <div class="calendar-scroll">
                                        <div class="calendar-table calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5" role="tabpanel">
                            <div class="table-calendar">
                                <div class="tf-container">
                                    <div class="calendar-scroll">
                                        <div class="calendar-table calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6" role="tabpanel">
                            <div class="table-calendar">
                                <div class="tf-container">
                                    <div class="calendar-scroll">
                                        <div class="calendar-table calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab7" role="tabpanel">
                            <div class="table-calendar">
                                <div class="tf-container">
                                    <div class="overflow-scroll calendar-scroll">
                                        <div class="calendar-table calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-appointment p-events mb-30">
                 <div class="mx-30">
                    <div class="section-appointment-inner">
                        <form id="contactform" class="form-contact-us style-white-2 px-mobile-sm" method="post" action="https://micarehtml.vercel.app/contact/contact-process.php" novalidate="novalidate">
                            <div class="heading-form mb-40">
                                <h2 class="text-anime">
                                    Make an Appointment Today for health checkup.
                                </h2>
                            </div>
                            <fieldset class="item mb-10">
                                <i class="icon-user"></i>
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </fieldset>

                            <fieldset class="item mb-10">
                                <i class="icon-envelope"></i>
                                <input type="email" name="mail" id="mail" placeholder="Email Address" required>
                            </fieldset>

                            <div class="cols mb-10 g-10 rg-10">
                                <fieldset class="item">
                                    <i class="icon-tooth"></i>
                                    <input type="text" name="services" id="services" placeholder="Services" required>
                                </fieldset>

                                <fieldset class="item">
                                    <i class="icon-calendar-day"></i>
                                    <input type="text" name="date" id="datepicker" class="date-input" placeholder="Date & Time" required>
                                </fieldset>

                            </div>

                            <fieldset class="item-textarea mb-24">
                                <textarea name="message" id="message" placeholder="Write message..." required></textarea>
                            </fieldset>

                            <button type="submit" class="tf-btn">
                                <span>Make Appointment</span>
                                <i class="icon-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
@endsection
