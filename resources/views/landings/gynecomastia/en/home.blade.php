@extends('layouts.master')
@section('page_title', 'Gynecomastia Surgery in Turkey - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section  slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Assoc. Prof. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Gynecomastia Surgery  <br> in Turkey</h1>
                    <p class="custom-font-size-1">
                        Gynecomastia is the condition of having enlarged breasts similar to female breasts, which often occurs during puberty in men, but can occur at any age.
                        This may be due to hormonal changes, after the use of certain medications, heredity or due to obesity.

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
                    <h2>Why is Gynecomastia Surgery is Necessary?</h2>
                    <p>
                        Gynecomastia can cause emotional discomfort and destroy individuals' self-confidence. Some men may avoid wearing revealing clothes, physical activities that reveal their breasts, or even sexual intimacy to hide their situation. Patients may be ashamed to wear a t-shirt and swim in the sea and pool in summer. Some patients walk and sit with their breasts stretched to hide the size of their breasts. Gynecomastia treatment will help the patient regain their lost confidence.  </p>
<h2>How is Gynecomastia Surgery performed?</h2>
                    <p>Gynecomastia surgery can be performed with the liposuction method, or in addition to liposuction, devices such as laser or vaser (ultrasonic-based fat breakdown) can be used. Open surgery technique is used in patients who find hard tissues and/or gland in the breasts that cannot be removed with liposuction. Excess skin should also be removed in patients with excess skin tissue or sagging chest skin.
                        Although it can be seen unilaterally in some patients, it is usually seen in both sides of the chest.
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
                                        <p class="mb-4">45 min</p>
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
                                        <p class="mb-4">4 week</p>
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
                    Gynecomastia surgery reduces breast size in men, flattens the chest and gives a masculine appearance. In severe cases of gynecomastia, the excess weight of breast tissue can cause the breasts to sag and the nipple to appear enlarged. In these cases, the position and size of the nipple is surgically improved and excess skin is reduced.

                </blockquote>
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

                <div class="col-lg-12 mt-4 pt-3 mb-0 pb-0">
                    <h2>What Is The Recovery Period After Gynecomastia Surgery?
                    </h2>

                    <p>Dressing will be applied to the suture areas during the recovery period. A compression garment will be used to minimize swelling and support the new chest contour.
                        Drains may be temporarily placed under the skin during surgery to drain any excess blood or fluid that may accumulate.
                        It is very important to follow your plastic surgeon's instructions and attend checkups as scheduled.
                        The results of gynecomastia surgery are permanent. However, if the Gynecomastia is due to the use of drugs such as Steroids or weight gain, you need to stop these drugs and stay at a stable weight for the results to be permanent.
                    </p>

                </div>

                <div class="col-lg-12 ">
                    <h2>Gynecomastia Surgery in Turkey</h2>
                    <p>
                        It's essential to research reputable clinics and experienced surgeons who specialize in gyncomastia surgery to ensure a successful and satisfying outcome.

                        Turkey has emerged as a popular destination for aesthetic surgeries due to its affordable prices without compromising quality, as Turkey is one of the leading countries in the field of aesthetic surgery. The cost of a gynecomastia surgery in Turkey can vary based on factors such as the specific procedures chosen, clinic reputation, and additional services. On average, prices can be significantly lower compared to other countries, with potential cost savings of 50% or more.
                    </p>
                </div>
            </div>
        </div>
    </section>






    <!-- Service Detail -->
    <section class="section horizontal-form section-text-light section-background mt-0 mb-0 servicedeatil"
             style="background-image: url({{ asset('img/global/service-detail.jpg') }});background-size: cover;background-position: 40% 58%!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h2>💫 The Services Included In The Package</h2>
                </div>
                <div class="col-4">
                    <ul>
                        <li>✨ Welcoming and Airport pickup</li>
                        <li>✨ 5-Star Hotel Accommodation</li>
                        <li>✨ Hospital Accommodation Including All Expenses</li>
                        <li>✨ VIP transfers between the hotel and the hospital</li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li>✨ Nursing care at the hotel</li>
                        <li>✨ Doctor's consultation</li>
                        <li>✨ Tests before and after the surgery</li>
                        <li>✨ Dressing kits</li>

                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li>✨ Garments (And BBL pillow for the BBL Patients)</li>
                        <li>✨ Anesthesia Consultation</li>
                        <li>✨ Check-ups (At least twice)</li>
                        <li>✨ Translator Support at the hotel and hospital</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <!-- Medical Trip -->
    <section class="section section-no-border pb-5 mb-5 ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 medical-trip-col">
                    <div class="image-boxes">
                        <div class="owl-carousel owl-theme nav-inside dots-morphing" data-plugin-options="{
                                    'responsive': {'0': {'items': 1, 'slideBy': 1, 'autoplay': true, 'autoplayTimeout': 2000},
                                                   '479': {'items': 1, 'slideBy': 1, 'autoplay': true, 'autoplayTimeout': 2000},
                                                   '768': {'items': 1, 'slideBy': 1, 'autoplay': true, 'autoplayTimeout': 3000},
                                                   '979': {'items': 1, 'slideBy': 1, 'autoplay': true, 'autoplayTimeout': 4000},
                                                   '1199': {'items': 1, 'slideBy': 1, 'autoplay': true, 'autoplayTimeout': 40000}},
                                    'autoplayHoverPause': true,
                                    'margin': 10,
                                    'loop': true,
                                    'nav': true,
                                    'dots': true,
                                    'dotsEach': true
                                }">
                            @foreach($medicalTrip as $photo)
                                <div>
                                    <div class="col-12">
                                                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                                                        <span class="thumb-info-wrapper">
                                                            <img src="{{ asset('img/global/istanbul/' . $photo['imageName']) }}" class="img-fluid" alt="Istanbul">
                                                        </span>
                                                    </span>
                                    </div>
                                </div>
                            @endforeach
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
                                When you reach Istanbul, your VIP service awaits you. We welcome you at the airport and transport you to the 5-star hotel, where you can check in and settle in straight away. Your transfers from the hotel to the hospital, clinic, airport, and vice versa are done by VIP transportation.
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
                                After a detailed pre-operative consultation with the patient, Surgical treatment is performed by Assoc. Prof. Dr. Daghan Isik in an accredited A+ hospital. The most suited and proven procedures are performed for your treatment.
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
                                In post-operative checkups, Assoc. Prof. Dr. Daghan Isik examines the patients personally, and informs the patients of the process of recovery. The team of the clinic contacts the patients to track their recovery process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Surgeon -->
    <section class="section  section-background mt-0 mb-0 surgeronabout" style="background: #f1f1f1!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2>About Surgeon</h2>
                    <p>Assoc. Prof. Dağhan IŞIK was born in Mersin in 1976. He completed his primary, secondary and high school education in İzmir.
                        After graduating from Dokuz Eylul University Faculty of Medicine in 1999, he worked as a freelance physician. He completed his Plastic, Reconstructive and Aesthetic Surgery specialization training, which he started in 2000, at Gaziantep University in 2005. He completed his compulsory service in Gaziantep between 2005-2007. </p>
                    <p>  In 2008, he worked at the Ohio State University Plastic Surgery Clinic in the USA. Between 2008 and 2013, he first started as a lecturer in the Department of Plastic, Reconstructive and Aesthetic Surgery at Van Yüzüncü Yıl University Faculty of Medicine. He has been the head of the department since 2011.
                        He received the title of Associate Professor in 2012.
                        He worked at Izmir Katip Celebi University Faculty of Medicine between 2013-2016. </p>
                    <p>  He currently works as a freelance physician. Associate Professor of Plastic, Reconstructive and Aesthetic Surgery, Dr. Dağhan IŞIK also has a specialization diploma in Oral, Facial and Maxillofacial Surgery, a new branch of medicine in Turkey. He is a member of the Turkish Plastic, Reconstructive and Aesthetic Surgery Association and the Turkish Medical Association. </p>
                    <p>  He has published about 60 international and 20 national articles and many domestic and international papers.
                        Associate Professor of Plastic, Reconstructive and Aesthetic Surgery, Dr. Dağhan IŞIK also has a specialization diploma in Oral, Facial and Maxillofacial Surgery, a new branch of medicine in Turkey. </p>
                    </p>
                </div>

                <div class="col-lg-5">
                    <img src="{{asset('img/global/daghan-isik.jpg')}}" alt="">
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
                        <h2>Advantages of Gynecomastia Surgery in Turkey</h2>
                        <p>
                            Gynecomastia Surgery in Turkey offers several advantages, including high-quality healthcare, affordability, and a popular destination for medical tourism. The country boasts a well-established healthcare system, modern clinics, and experienced surgeons specializing in men’s aesthetics. The cost of procedures in Turkey is often significantly lower than in other countries, without compromising on quality due to the Turkish Lira’s lower exchange rate against major currencies.

                            Additionally, Turkey's cultural richness, beautiful landscapes, and welcoming atmosphere make it an appealing choice for those seeking both cosmetic enhancements and a memorable vacation.


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



-->
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
.col-lg-6.gyno img {
    position: relative;
    width: 100%;
    display: flex;
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
    </style>
@endpush
