@extends('layouts.master')
@section('page_title', 'Mommy Makeover in Turkey - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section  slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Assoc. Prof. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Mommy Makeover <br> in Turkey</h1>
                    <p class="custom-font-size-1">
                        One of the most valuable experiences for a woman is to be a mother. However, this experience can have negative physical outcomes. Deformity in the breasts, sagging in abdominal skin, excessive fat tissues in the body are common problems for the mothers. These problems can cause a loss of confidence for women. The aim of the mommy makeover treatment is to enable women to regain their pre-birth appearance as well as confidence.
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
    <section id="treatment" class="section section-no-border pb-0  mb-3 m-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- What is a zircon tooth? -->
                <div class="col-lg-7">

                    <h2>A quick look at "Mommy Makeover "</h2>

                    <ul>
                        <li><b> Duration:</b> 4 to 6 hours</li>
                        <li> <b> Accommodation:</b> 3 nights at the hospital+ 4 nights at the hotel.</li>
                        <li>  <b> Anesthesia: </b>General anesthesia</li>
                        <li>  <b> Recovery:</b> 7 to 10 days.</li>
                        <li>  <b> Side Effect:</b> Temporary, bruising, pain, discomfort</li>
                        <li> <b>  Complications:</b> Delay in healing, Bleeding, Infection, Swelling, Bruising, and Pain</li>
                        <li> <b>  Scars:</b> recovering scar lines are experienced on the areas such as abdomen, breast, leg depending on the procedure that the patient has.</li>
                        <li>  <b> Pain:</b> For the first 2 days, pain is more regular. After 2 days it is more tolerable (depending on the patient)</li>
                        <li>  <b> Results: </b>(permanent result within 6 months to 1 year)</li>
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


    <!-- Horizontal Form -->
    <section class="section horizontal-form section-text-light section-background mt-5  mb-0"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }});background-size: cover;background-position: 40% 58%!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    @livewire('simple-form', ['formPosition' => 'Horizontal', 'data' => $data])
                </div>
            </div>
        </div>
    </section>

    <!-- Blockquote -->
    <section class="section section-no-border pb-5 mb-5">
        <div class="container">
            <div class="dent-block row align-items-center justify-content-between">
                <blockquote class="custom-blockquote">
                    In order to have the targeted features in a single package, the desired result is achieved in a short time with several surgical procedures. After childbirth and breastfeeding, sagging breasts, fat in various parts of the body, stretch marks and sagging in the abdomen are encountered. These problems seen in women are determined in a short time and a successful result is achieved as a result of surgical procedures. Mommy makeover prices vary depending on the person’s body structure.

                </blockquote>
            </div>

        </div>
    </section>

    <!-- Makeover Analysis -->
    <section id="analysis" class="section section-no-border pb-0 m-0  desc-sec mb-5">
        <div class="container teeth-container">
            @livewire('makeover-analysis', ['formPosition' => 'Makeover Analysis', 'data' => $data])
        </div>
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

    <!-- Horizontal Form -->




    <!-- İmplant / Tedavi Özeti -->
    <section class="section section-no-border">
        <div class="container">
            <div class="row justify-content-between">
                <!-- What is a zircon tooth? -->

                <div class="col-lg-12">
                    <h2>Mommy Makeover Surgery in Turkey
                    </h2>
                    <p>It's essential to research reputable clinics and experienced surgeons who specialize in mommy makeovers to ensure a successful and satisfying outcome.

                        Turkey has emerged as a popular destination for mommy makeovers due to its affordable prices without compromising quality, as Turkey is one of the leading countries in the field of aesthetic surgery. The cost of a mommy makeover in Turkey can vary based on factors such as the specific procedures chosen, clinic reputation, and additional services. On average, prices can be significantly lower compared to other countries, with potential cost savings of 50% or more.

                    </p>
                </div>

                    <div class="col-lg-6">
                        <h3>Advantages of Mommy Makeover Surgery in Turkey
                        </h3>
                        <p>Mommy Makeover Surgery in Turkey offers several advantages, including high-quality healthcare, affordability, and a popular destination for medical tourism. The country boasts a well-established healthcare system, modern clinics, and experienced surgeons specializing in mother’s aesthetics. The cost of procedures in Turkey is often significantly lower than in other countries, without compromising on quality due to the Turkish Lira’s lower exchange rate against major currencies.

                            Additionally, Turkey's cultural richness, beautiful landscapes, and welcoming atmosphere make it an appealing choice for women seeking both cosmetic enhancements and a memorable vacation.
                        </p>
                </div>

                    <div class="col-lg-6">
                        <img src="{{asset('img/landing/mommymakeover/mommymakeover-price-turkey.png')}}" alt="">
                    </div>


            </div>
        </div>
    </section>

    <section class="section horizontal-form section-text-light section-background mt-0 mb-5"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }});background-size: cover;background-position: 40% 58%!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    @livewire('simple-form', ['formPosition' => 'Horizontal', 'data' => $data])
                </div>
            </div>
        </div>
    </section>

    <!-- Makeover Analysis -->
    <section id="analysis" class="section section-no-border pb-0 m-0  desc-sec mb-5">
        <div class="container teeth-container">
            @livewire('makeover-analysis', ['formPosition' => 'Makeover Analysis', 'data' => $data])
    </div>
</section>

    <!-- İmplant / Tedavi Özeti -->
    <section class="section section-no-border">
        <div class="container">
            <div class="row justify-content-between">
                <!-- What is a zircon tooth? -->

                <div class="col-lg-12">
                    <h2>Who Is a candidate for a Mommy Makeover?</h2>
          <p>

              Mommy Makeover treatment is not only for women who gave birth, but also can apply to women who have deformity and experienced weight loss, and wants to regain their lost confidence. Mommy Makeover is an umbrella treatment term for body aesthetics that involves various procedures, including breast aesthetics, tummy tuck, liposuction, thigh lift, BBL, and arm lift. One or a few of these procedures can be applied in accordance with the patient’s needs and wishes.
          </p>   <p>    The prices can change depending on the number of the procedures, severity of the deformity, the patient’s previous surgeries, and the diseases the patient has. You can achieve your dream body with a budget friendly cost, that includes an experienced surgeon, surgery in an A+ hospital, 5-star hotel accommodation, VIP transportation, and nurse care. For an accurate price, please contact us.
          </p>
                </div>
            </div>
        </div>
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


    <!-- İmplant / Tedavi Özeti -->
    <section class="section section-no-border">
        <div class="container">
            <div class="row justify-content-between">
                <!-- What is a zircon tooth? -->

                <div class="col-lg-12">
                    <h2>What Procedures Are Included in a Mommy Makeover?
                    </h2>
                    <p> Mommy Makeover involves various procedures, including;</p>
                   <ul>
                       <li>	Breast Aesthetics (Breast lift, Breast Augmentation, Breast Reduction, Breast lift and augmentation)</li>
                    <li>	Tummy Tuck</li>
                    <li>	 Liposuction (Vaser and/or laser lipolysis)</li>
                    <li>	BBL (fat transfer to buttock and to hips upon request)</li>
                    <li>	 Thigh lift</li>
                    <li>	 Arm lift</li>
                   <li>	Genital Aesthetic (vaginoplasty or vaginal tightening surgery, labioplasty, fat transfer to outer labia) </li>
                   </ul>
                       <p>                    One or a few of these procedures can be applied in accordance with the patient’s needs and wishes.
                       </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Horizontal Form -->
    <section class="section horizontal-form section-text-light section-background mt-0 mb-5"
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

                <div class="col-lg-12">


                    <h2> How is a Mommy Makeover done?
                    </h2>
               <p>Which procedures to apply in Breast Aesthetics are determined in accordance with the patient’s needs and wishes. So one of the following procedures can be done for patients; Breast lift, breast reduction, breast augmentation, breast lift and augmentation. Patients who have sagginess in their abdominal area are suitable for the Tummy Tuck procedure. Liposuction is often applied to the back and waist areas. If there is no sagginess in the abdominal area, liposuction can be done to reduce the fat tissue in tummy. A medical equipment named Vaser, which uses ultrasound waves to melt the fat, is often applied in liposuction procedure.  Liposuction done with vaser reduces bleeding, increases the amount of fat removed, and provides a smoother surface. Laser lipolysis is an another equipment used for the melting of fat in a smaller area (chin, arms, inner thighs),  but more frequently used in skin tightening.  </p>  <h2> Post-Surgery Process

                    </h2>
                    <p>The surgery and recovery time varies depending on the number of procedures included in the Mommy Makeover treatment. After the aesthetic procedures, the patients are followed up in hospital for a certain period of time and then discharged. After discharge, the routine medications are given to the patients and their wound care and dressings are done by our clinic’s nurses at the 5-star hotel. Therefore, we ensure that our patients should have a quality rest after the Mommy Makeover treatment. They should use the special bras and garments clothed at the end of their surgery by the nurses of the clinic on a regular basis. After the discharge, patients are transferred in VIP transportation to the doctor’s clinic from the hotel for the doctor’s personal check up.
                    </p>

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
                                When you reach Istanbul, your VIP service awaits you. We welcome you at the airport and transport you to
                                the 5-star hotel, where you can check in and settle in straight away. Your transfers from the hotel to the
                                hospital, clinic, airport, and vice versa are done by VIP transportation.
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
                                After a detailed pre-operative consultation with the patient, Surgical treatment is performed by Assoc. Prof. Dr. Daghan
                                Isik in an accredited A+ hospital.
                                The most suited and proved procedures are performed for your treatment.
                            </p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/global/nurse.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">03</span>
                            <h4 class="mb-2">Nurse Care</h4>
                            <p class="mb-4">
                                After discharge from the hospital, experienced  nurses will visit you at the hotel periodically for your post-surgery care.      </div>
                    </div>

                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/doctor.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">04</span>
                            <h4 class="mb-2">Medical Follow-Up</h4>
                            <p class="mb-4">
                                In post-operative checkups, Assoc. Prof. Dr. Daghan Isik examines the patients personally, and informs the patients of the process of recovery. The team of the clinic contacts the patients to track their recovery process.     </p>
                        </div>
                    </div>
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






    <!-- Zirkonyum - Hasta Yorumları - SSS / Sidebar Form -->
    <section class="section section-no-border mb-0 pb-0">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-7 dent-block">
                    <!-- Content -->
                    <div class="content-block">
                        <h2>What Should Patients Take Care of After "Mommy Makeover Turkey Istanbul"</h2>
                        <p>
                            After the surgery, the patients need to take the medications given by the doctor. The doctor will give the information on the duration of the garments’ usage. The necessary dressings materials will be given to the patient before their return to their home country. The patient is informed of their personal advised diet and their mobilisation frequency.
                        </p>
                        <h2>The Price of the Mommy Makeover Surgery in Turkey</h2>
                        <p>The prices can change depending on the number of the procedures, severity of the deformity, the patient’s previous surgeries, and the diseases the patient has. You can achieve your dream body with a budget friendly cost, that includes an experienced surgeon, surgery in an A+ hospital, 5-star hotel accommodation, VIP transportation, and nurse care. For an accurate price, please contact us.</p>
                        <h2>How About Postoperative Recovery Period?</h2>
                        <p>
                            Patients should start walking immediately after mommy makeover. Although mobilization will be difficult
                            for several days due to drains, it is so crucial to walk in this period.
                        </p>

                    </div>



                    <!-- Hasta Yorumları -->
                    <div id="comments" class="testimonial-block mt-5">
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-img">
                                <img src="{{ asset('img/global/review.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2 font-weight-bold text-7">Mommy Makeover Turkey Reviews</h4>
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


    <!-- Makeover Analysis -->
    <section id="analysis" class="section section-no-border pb-0 m-0  desc-sec mb-5">
        <div class="container teeth-container">
            @livewire('makeover-analysis', ['formPosition' => 'Makeover Analysis', 'data' => $data])
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
.slider-sec:before {
    content: "";
    background: black;
    width: 100%;
    display: block;
    height: 100%;
    position: absolute;
    opacity: 0.37;
}
.header-column.justify-content-end.col-auto.px-0.d-none.d-md-flex {
    display: none!important;
}
    </style>
@endpush
