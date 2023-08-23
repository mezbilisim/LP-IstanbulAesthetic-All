@extends('layouts.master')
@section('page_title', 'Breast Aesthetics - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec  section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Assoc. Prof. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Breast Aesthetics <br> in Turkey</h1>
                    <p class="custom-font-size-1">
                        Breast size and shape are very important parts of their image and self-confidence for women.
                        For this reason, women who are not satisfied with the size and shape of their breasts prefer
                        to achieve permanent solutions with breast augmentation surgery.

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
                    <h2>Who is suitable for Breast Aesthetics?</h2>

                    <p> <b>Breast augmentation aesthetics;</b> </p>
                       <ul>
                  <li>  Asymmetry in breasts in terms of size or shape,</li>
                      <li>  The size of your breasts is smaller than you want,</li>
                    <li>    Volume loss in the breasts due to breastfeeding or weight loss,</li>
                     <li>   It can be applied to people who need reconstruction in one or both breasts after mastectomy.</li>
                       </ul>
                    <h2>Are Silicone Breast Implants Safe?</h2>
                    <p>Silicone gel breast prostheses, which have been produced since the 2000s are used safely
                        and without the need to be replaced periodically. The most effective, permanent, and reliable
                        method for enlarging the breast tissue is breast augmentation surgery using silicone breast prostheses.


                    </p>


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
                                        <h4 class="mb-2">Hospital Admission </h4>
                                        <p class="mb-4">1 night</p>
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
                <blockquote class="custom-blockquote mt-2">
                    Breast Aesthetics is one of the most preferred aesthetic operations today. For women, having an erect
                    and full breast is a must for beauty. However, anatomically, the female breast may not be in the desired
                    form and shape. This procedure is preferred in cases such as correcting sagging breasts, enlarging small
                    breasts and breast reconstruction of breast tissue lost due to cancer.
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
                        You can also contact us to have breast aesthetics. Our patient consultants
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
                    <h2>Breast Aesthetic Surgery</h2>
                    <p>
                        Breast augmentation, breast reduction, breast reconstruction surgeries, which can
                        be used to change the patient's body image, help the person to feel better with the aesthetic appearance.
                    </p>
                    <p>
                        In breast aesthetic surgeries, breast reduction is performed by removing excess fat tissue and
                        the breasts become light and firm.
                    </p>
                    <p>
                        The breast augmentation operation provides the reconstruction of the shape and correction of the
                        asymmetry with the use of silicone prosthesis.
                    </p>
                    <p>
                        In breast reconstruction operations, the breast is reshaped by using a breast prosthesis or by adding
                        the patient's tissues to the breasts.
                    </p>
                    <p>
                        Breast augmentation, breast reduction, breast reconstruction surgeries, which can be used to change
                        the patient's body image, help the person to feel better with the aesthetic appearance.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- İmplant / Tedavi Özeti -->
    <section class="section section-no-border mt-0 pt-0 pb-0 mb-4">
        <div class="container">
            <div class="row justify-content-between">
                <!-- What is a zircon tooth? -->
                <div class="col-lg-12 pb-4">
                    <p>
                        In breast aesthetic surgeries, excess fat tissue is removed, breast reduction and breasts become light and firm.
                    </p>
                    <p>
                        The breast augmentation operation provides the reconstruction of the shape and correction of the
                        asymmetry with the use of silicone prosthesis.
                    </p>
                    <p>
                        In breast reconstruction operations, the breast is reshaped by using a breast prosthesis or
                        by adding the patient's tissues to the breasts.
                    </p>

                    <h2>When does the patient return to her daily life after breast aesthetic surgery?</h2>
                    <p>
                        Breast aesthetic surgeries can be divided into two as breast reduction and breast augmentation.
                        Breast lift is a combination of these. In breast augmentation and breast reduction surgeries, our
                        patients usually return to work within 3-4 days. However, there is a little less pain in breast
                        reduction operations and these patients are expected to recover more easily.

                    </p>
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
                        <h2>What is Breast Asymmetry Correction Surgery?</h2>
                        <p>
                            Breast aesthetic surgeries can be divided into two as breast reduction and breast augmentation.
                            Breast lift is a combination of these. In breast augmentation and breast reduction surgeries, our
                            patients usually return to work within 1 week. However, there is less pain in breast reduction
                            surgeries and these patients are expected to recover more easily.
                        </p>

                        <h2>What is  Breast Reduction Surgery?</h2>
                        <p>
                            It is a procedure in which excess breast tissue and skin is removed to obtain a breast size proportional
                            to your body and to relieve the discomfort associated with large breasts (macromastia). Breasts that are
                            disproportionately large relative to the body can cause both physical and emotional distress for patients.
                            Patients with enlarged breasts may have neck and back pain. Patients may have limitation of physical activity
                            due to pain. This limitation can result in further weight gain. This patient group especially complains of the
                            pressure and scarring of the bra straps on their shoulders. In summer, they may encounter hygiene problems,
                            redness and sores under the breast. Due to the large breasts, patients have a forward posture and gait.
                            In most people, this bad posture gives the impression of an insecure mood.
                        </p>
                        <p>
                            Although breast reduction surgery is usually performed to eliminate medical problems, breast reduction
                            surgery can also be performed as an aesthetic procedure in patients who do not have the aforementioned
                            macromastia-related complaints but are not satisfied with the size of their breasts. With this surgery,
                            medical problems related to breast size are eliminated and more aesthetic breasts are obtained.
                        </p>

                        <h2>What is Breast Augmentation Surgery?
                        </h2>
                        <p>
                            Breast augmentation or mammoplasty to increase the size of the breast is a surgical procedure
                            applied to change and improve its fullness and shape. Although the use of silicone implants is
                            generally preferred in breast augmentation aesthetics, it is possible to apply breast augmentation
                            aesthetics with the fat transfer method. There are some differences in the way of application and
                            permanence of both methods, and as a result of the evaluations made specifically for the person who
                            wants to have breast augmentation aesthetics, it is decided which method will be preferred. In case
                            of need, breast augmentation surgery can be applied together with breast lift surgery.

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
        .lang {
            display: none!important;
        }
        @media only screen and (min-width: 992px) {
            .feature-box-info.pl-0 {
                min-width: 255px!important;
            }}
        @media only screen and (max-width: 768px) {
            #header .header-logo img {

                image-rendering: auto!important;
            }
            ul.header-extra-info ul.social.pl-0 {
                display: block!important;
            }

            #header .header-column .header-extra-info li:nth-child(3) {
                display: none!important;
            }
        }
    </style>
@endpush
