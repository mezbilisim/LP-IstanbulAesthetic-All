@extends('layouts.master')
@section('page_title', 'Liposuction - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Assoc. Prof. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Liposuction  in Turkey</h1>
                    <p class="custom-font-size-1">
                        Liposuction, one of the most common types of cosmetic surgery, is applied to remove fat deposits
                        resistant to diet and exercise and to reshape the body. The liposuction method ensures the permanent
                        removal of fat cells in the application area.
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1 mb-5 mt-4">
                    <div class="row form-row form-icon border-radius">
                        <div class="col">
                            @livewire('simple-form', ['formPosition' => 'Slider', 'data' => $data])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zirkonyum / Tedavi Özeti -->
    <section id="treatment" class="section section-no-border pb-0 m-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- What is a zircon tooth? -->
                <div class="col-lg-7">
                    <h2>Who Is Liposuction Suitable For?  </h2>
                    <p>
                       <b>Liposuction surgery;</b>
                    </p>

                    <ul>

                       <li> Having fat deposits resistant to diet and exercise in certain parts of the body, despite being at or close to ideal weight,</li>
                       <li> Disproportionate distribution of fat in the body,</li>
                      <li>  It can be applied to people who do not have a systemic health problem.</li>
                      <li>  Liposuction application is not applied to those who are pregnant and breastfeeding. Since the
                          success of the operation may be affected due to decreased elasticity of the skin in advanced ages,
                          liposuction is not applied to people over a certain age. However, this decision is made as a result
                          of the evaluation made specifically for the patient. </li>

                    </ul>

                </div>

                <!-- Treatment Summary -->
                <div class="col-lg-5 under-slider-right position-relative">
                    <div class="image-boxes first-img">
                        <img class="image-boxes-img border-radius" src="{{ asset('img/landing/' . $data['landing_slug'] . '/info-box-img.jpg') }}" alt="{{$data['landing_slug']}} ">
                    </div>
                    <div class="info-right-1">
                        <h3 class="tedavi"><em>Summary of </em> Treatment</h3>
                        <p>
                            For detailed information,you can contact us via
                            WhatsApp or by filling out the consultation form free.
                        </p>

                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Operation Time</h4>
                                        <p class="mb-4">2 - 6 hour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-person-booth"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Recovery Time</h4>
                                        <p class="mb-4">6 week</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Reservation</h4>
                                        <p class="mb-4">1 a day</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-bed"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Anesthesia</h4>
                                        <p class="mb-4">general anesthesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blockquote -->
    <section class="section section-no-border pb-5 mb-5">
        <div class="container">
            <div class="dent-block row align-items-center justify-content-between">
                <blockquote class="custom-blockquote">
                    Although the liposuction method can be applied to many different areas such as the thigh, abdomen,
                    neck, hip, arm, jowl, knee, back, it should not be forgotten that it is a body contour correction
                    procedure and it should not be misconstrued that it is a weight loss method.
                </blockquote>
            </div>
        </div>
    </section>

    <!-- CHAMPAIGN BANNER -->
    <section class="appear-animation section section-no-border section-long-form section-angled bg-light pt-0 pb-5 mb-0 discount-sec animated fadeInUpShorter appear-animation-visible"
             data-appear-animation="fadeInUpShorter"
             data-appear-animation-duration="750"
             data-plugin-options="{'accY': -200}" style="animation-delay: 100ms;background-image: url(/img/landing/{{ $data['landing_slug'] }}/{{ app()->getLocale() }}-disctount-slide.jpg)!important;">
        <div class="container"></div>
    </section>

    <!-- Horizontal Form -->
    <section class="section horizontal-form section-text-light section-background mb-0 mt-0"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }});background-size: cover;background-position: 40% 58%!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    @livewire('simple-form', ['formPosition' => 'Horizontal', 'data' => $data])
                </div>
            </div>
        </div>
    </section>

    @if(config('lucky-spin.isActive'))
        <!-- Lucky Spin -->
        <section id="lucky-spin" class="appear-animation section section-no-border section-long-form section-angled bg-light pt-5 pb-5 mt-0 m-0 mb-0"
                 data-appear-animation="fadeInUpShorter"
                 data-appear-animation-duration="750"
                 data-plugin-options="{'accY': -200}"
                 style="background: rgb(11 11 11) !important;
                     background-position: right!important;
                     background-image: url({{asset('img/global/spin-bg-bottom.png')}})!important;
                     background-repeat: no-repeat!important;">
            <div class="container">
                @livewire('lucky-spin', ['formPosition' => 'Lucky Spin', 'data' => $data])
            </div>
        </section>
    @endif

    <!-- Before - After -->
    <section id="before-after" class="ba-en-sec section section-no-border p-0 pb-5 pt-5 mb-0">
        <div class="container before-after-container">
            <div class="row align-items-center justify-content-between pb-1">
                <div class="text-center d-flex align-items-center flex-column">
                    <h2 class="bf-head bf-head-en">BEFORE - AFTER</h2>
                    <p class="col-10">
                        You can also contact us to have liposuction. Our patient consultants
                        will provide feedback as soon as possible.
                    </p>

                    <div class="row align-items-center justify-content-between">
                        @foreach($beforeAfterPhotos as $photo)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="portfolio-item">
                                    <a class="img-thumbnail d-block lightbox" href="{{ asset('img/landing/before-after/' . $photo['imageName']) }}" data-plugin-options="{'type':'image'}">
                                        <img class="img-fluid" src="{{ asset('img/landing/' . $data['landing_slug'] . '/before-after/' . $photo['imageName']) }}" alt="Project Image">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a type="button" class="btn btn-modern btn-rounded btn-primary mb-2" href="{{ route($data['landing_slug'] . '.gallery', ['locale' => app()->getLocale()]) }}">View All</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Horizontal Form -->
    <section class="section horizontal-form section-text-light section-background mt-0 mb-0"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }});background-size: cover;background-position: 40% 58%!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    @livewire('simple-form', ['formPosition' => 'Horizontal', 'data' => $data])
                </div>
            </div>
        </div>
    </section>

    <!-- İmplant / Tedavi Özeti -->
    <section class="section section-no-border">
        <div class="container">
            <div class="row justify-content-between">
                <!-- What is a zircon tooth? -->
                <div class="col-lg-4">
                    <div class="feature-box-img lr-img">
                        <video class="videobox" width="100%" height="510" controls>
                            <source src="{{ asset('img/landing/' . $data['landing_slug'] . '/patient-video.mp4') }}" type="video/mp4">
                            <source src="{{ asset('img/landing/' . $data['landing_slug'] . '/patient-video.ogg') }}" type="video/ogg">
                        </video>
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2>How is Liposuction / Fat Removal Performed?</h2>
                    <p>
                        Liposuction is a procedure that can be applied with different techniques. By injecting a
                        liquid solution into the area to be shaped using the liposuction method, the area is anesthetized
                        and the possible pain that might be felt during the application is alleviated.
                    </p>
                    <p>
                        1-2 mm long incisions
                        are made on the skin and cannulas are placed in the area through these incisions. The vacuum machine to
                        which the cannulas are attached begins to absorb the partially liquefied oil.
                    </p>
                    <p>
                        The vacuum tube is moved
                        on the surface and the oil is broken down and discharged quickly. When the operation is over,
                        the incisions are left open for a while. Thus, it is ensured that liquid does not accumulate in the
                        application area and that the liquid flows out. Then the incisions are closed, the area is
                        tightly bandaged and the operation is terminated.
        </p>
                    <p>Laser assisted liposuction method uses laser beams to melt fat. After the fat has melted,
                        it is vacuumed out through thin cannulas as in the classical method.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- İmplant / Tedavi Özeti -->
    <section class="section section-no-border mt-0 pt-0 pb-0 mb-4">
        <div class="container">
            <div class="row justify-content-between">
                <!-- What is a zircon tooth? -->
                <div class="col-lg-12">

                    <h2>Healing Process After Liposuction / Fat Removal</h2>
                 <p>   After the liposuction surgery, the patient should wear a special corset for about 2 months.
                    Medications prescribed by the doctor should be used regularly. Compliance with the given nutrition
                    program is very important for the success of the operation. During the recommended time, sudden movements,
                    heavy lifting and activities that may cause strain should be avoided.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Horizontal Form -->
    <section class="section horizontal-form section-text-light section-background mt-0 mb-0"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }});background-size: cover;background-position: 40% 58%!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    @livewire('simple-form', ['formPosition' => 'Horizontal', 'data' => $data])
                </div>
            </div>
        </div>
    </section>

    <!-- CHAMPAIGN BANNER -->
    <section class="appear-animation section section-no-border section-long-form section-angled bg-light pt-0 pb-5 mb-0 discount-sec animated fadeInUpShorter appear-animation-visible"
             data-appear-animation="fadeInUpShorter"
             data-appear-animation-duration="750"
             data-plugin-options="{'accY': -200}" style="animation-delay: 100ms;background-image: url(/img/landing/{{ $data['landing_slug'] }}/{{ app()->getLocale() }}-disctount-slide.jpg)!important;">
        <div class="container"></div>
    </section>

    <!-- Zirkonyum - Hasta Yorumları - SSS / Sidebar Form -->
    <section class="section section-no-border mb-0 pb-0">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-7 dent-block">
                    <!-- Content -->
                    <div class="content-block">
                        <h2>Is The Effect Of Liposuction Surgery Permanent?</h2>
                        <p>
                            Weight gain after the surgery can never be prevented. The effect of the surgery
                            changes according to the patient’s daily life since liposuction surgery is not
                            performed to help weight loss or prevention of weight gain. If the patient stays
                            loyal to his/her exercises and diet, the surgery will have a lasting effect.


                        </p>
                        <h2>From Which Areas Can Fat Be Removed In Liposuction Surgery?</h2>
                        <p>  <b>Areas for women are;</b></p>
                        <ul>
                            <li> Buttocks </li>
                            <li> Hip</li>
                            <li> Internal and external parts of thighs</li>
                            <li> Abdomen and waist</li>
                            <li> Adipose tissue existing in internal and external parts on knees</li>
                            <li> Double-chin</li>
                            <li> Lower and front parts of ears</li>
                            <li> Inner sides of knees</li>
                            <li> Back and front of arms</li>
                            <li> Internal and external parts of ankles</li>

                        </ul>
                        <p>
                            These are among the areas often preferred, since they accumulate fat more than the other areas. The fatty poor appearance present in areas is eliminated by this procedure.
                            <br>
                            Areas for men are mostly the abdomen, waist and belly areas. Liposuction surgery is performed in men for the most problematic areas in the upper part of the body such as the waist, abdomen, belly, and breasts due to fat accumulation in these areas. In a surgery, doctors can remove maximum 3 or 4 litres of fat.
                        </p>
                    </div>

                    <!-- Hasta Yorumları -->
                    <div id="comments" class="testimonial-block mt-5">
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-img">
                                <img src="{{ asset('img/global/review.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2 font-weight-bold text-7">Reviews of Satisfied Patients</h4>
                            </div>
                        </div>

                        <div class="owl-carousel owl-theme container mt-4 p-0"
                             data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 30000}">
                            @foreach($testimonials as $key => $value)
                                <div>
                                    <div class="testimonial testimonial-style-4">
                                        <blockquote>
                                            <p class="mb-0">{{ $value['comment'] }}</p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down"></div>
                                        <div class="testimonial-author pb-3">
                                            <div class="testimonial-author-thumbnail">
                                                <img src="{{ asset('img/global/icon/' . $value['gender'] . '.svg') }}" class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <p>
                                                <strong class="font-weight-extra-bold">{{ $value['name'] }}</strong>
                                                <span>{{ $value['title'] }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sık Sorulan Sorular -->
                    <div id="treatment-faqs" class="faqs" wire:ignore>
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-img">
                                <img src="{{ asset('img/global/sss.png') }}" alt="">
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Frequently Asked Questions</h4>
                            </div>
                        </div>

                        <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="faqsAccordion">
                            @foreach($faqs as $key => $value)
                                <div class="card card-default">
                                    <div class="card-header" id="collapse-faq-{{ $key }}-heading">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-target="#faq-{{ $key }}" aria-controls="collapse-faq-{{ $key }}" aria-expanded="false" data-bs-toggle="collapse">
                                                {{ $value['question'] }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="faq-{{ $key }}" class="collapse" aria-labelledby="collapse-faq-{{ $key }}-heading" data-bs-parent="#faqsAccordion">
                                        <div class="card-body pt-0">
                                            <p class="mb-0">{{ $value['answer'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 position-relative">
                    <aside class="sidebar border-radius" id="sidebar"
                           data-plugin-sticky
                           data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                        <div class="row form-row form-icon">
                            <div class="col">
                                @livewire('simple-form', ['formPosition' => 'Sidebar', 'data' => $data])
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Trip -->
    <section class="section section-no-border pb-5 mb-5 ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 medical-trip-col">
                    <div class="image-box p-relative">
                        <img class="image-boxes-img" src="{{ asset('img/landing/' . $data['landing_slug'] . '/otel.webp') }}" alt="">
                        <div class="text-on-image">
                            <span>Enjoy Istanbul in the best way possible by <br> staying  <strong>in VIP Hotels.</strong> </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 right-why position-relative">
                    <h3 class="why-head tedavi text-sm-5"><em>Plan Your </em>Medical Trip</h3>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/transfer.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">01</span>
                            <h4 class="mb-2">Transport</h4>
                            <p class="mb-4">
                                When you reach Istanbul, your VIP service awaits you. From the airport, drive to your 5-star hotel,
                                where you can check in and settle in straight away. Spend the rest of the arrival day with your
                                reserved opportunity to relax and get to know the city.
                            </p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/treatment.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">02</span>
                            <h4 class="mb-2">Treatment</h4>
                            <p class="mb-4">
                                On the day of the procedure, your VIP service vehicle will take you from the hotel to the clinic.
                                When you come to the clinic, you will meet the team that will perform your surgery. In the consultation,
                                you and all your treatment stages will be explained to you.
                            </p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/doctor.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">03</span>
                            <h4 class="mb-2">Medical Follow-Up</h4>
                            <p class="mb-4">
                                Our doctor will continue to be in contact with you after the surgery.
                                Assoc. Prof. Dağhan Işık will let you know when you will come for the post-operative checkups.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(config('lucky-spin.isActive'))
        <!-- Lucky Spin -->
        <section class="appear-animation section section-no-border section-long-form section-angled bg-light pt-5 pb-5 mt-5 m-0 mb-0"
                 data-appear-animation="fadeInUpShorter"
                 data-appear-animation-duration="750"
                 data-plugin-options="{'accY': -200}"
                 style="background: rgb(11 11 11) !important;
                     background-position: right!important;
                     background-image: url({{asset('img/global/spin-bg-bottom.png')}})!important;
                     background-repeat: no-repeat!important;">
            <div class="container">
                @livewire('lucky-spin', ['formPosition' => 'Lucky Spin', 'data' => $data])
            </div>
        </section>
    @endif

    <!-- Horizontal Form -->
    <section class="section horizontal-form section-text-light section-background mt-0 mb-0"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }});background-size: cover;background-position: 40% 58%!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    @livewire('simple-form', ['formPosition' => 'Horizontal', 'data' => $data])
                </div>
            </div>
        </div>
    </section>
@endsection


{{--Sayfalara özel custom css yazmak için--}}
@push('livewireStyle')
    <style type="text/css">

    </style>
@endpush
