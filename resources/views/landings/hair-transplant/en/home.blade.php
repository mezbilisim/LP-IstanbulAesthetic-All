@extends('layouts.master')
@section('page_title', 'Hair Transplant in Turkey  - Istanbul Aesthetic Surgery')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Istanbul Aesthetic Surgery</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Hair Transplant<br> in Turkey</h1>
                    <p class="custom-font-size-1">
                        Hair Transplant is a suitable procedure for those suffering from light to severe hair loss. It is treatment suitable for anyone over 20 years of age. The patient must be healthy and have a healthy donor area which will be evaluated by our expert doctors.

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
                    <h2>Professional Hair Transplant
                    </h2>
              <p>The Hair transplant treatment is a revolution in aesthetic treatments. It gives people the option to grow back their hair looking natural and beautiful as ever before. No more early balding to complain about. Easy access to transplant treatment gives everyone who desires a scalp full of healthy hair again. Many factors such as the color and thickness of the hair, its properties such as strength and waviness have an influence on the outcome of the procedure. The preferred method would be decided after analyzing the hair and scalp.
              </p>

                    <p> <b>There are two techniques widely used today for hair transplant.</b> </p>
                    <ol>
                        <li>Sapphire FUE Procedure and</li>
                        <li>   DHI treatment</li>
                    </ol>
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

                        <ul style="list-style: none; margin-left: -30px; font-weight: 500;">
                            <li>💫 5 Star Hotel</li>
                            <li>💫 Experienced Surgeon</li>
                            <li>💫 Nurse Care Hotel</li>
                        </ul>
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
                    In the field of hair transplantation, the only method that has been accepted all over the world and that provides the most natural and most efficient results is the FUE method. Over time, DHI and Sapphire techniques have been developed in order to adapt to every hair structure and every scalp within the FUE method, and these techniques, which will be decided by considering the advice of the expert, will bring you the most natural, most efficient and best results.
                </blockquote>
            </div>
        </div>
    </section>


    <!-- Analysis -->
    <section id="analysis"class="section-no-border pb-0 m-0 desc-sec mt-5 mb-5">
        <div class="container process-container">
            @livewire('hair-analysis', ['formPosition' => 'Hair Analysis', 'data' => $data])
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










    <section class="mt-5 mb-3 pb-4 pt-5">
        <div class="container text-left">
            <div class="row">

                <div class="col-lg-12">
                    <h2 class="mb-3">Sapphire FUE Technique
                    </h2>
                    <p>
                        The older technology was known as FUE which stands for FOLLICULAR UNIT EXTRACTION. It was done using blades which left more scarring and lead to more bleeding and higher infection. It also took a long time for the scalp to heal.
                        The latest SAPPHIRE FUE method is an amazing technology keeping in mind the patients comfort, health and wellbeing. It is called Sapphire FUE as it uses the precious sapphire gem stone having natural healing properties and natural sharpness and is very hygienic.
                    </p>
                </div>

                <div class="col-lg-6">
                    <p>
  This helps treatment of larger areas of bald patches in a patient and helps fit in up to 5000 hair grafts.
                        The expert doctor will take the hair follicles from donor area, filter it using the microscope depending upon the graft type. The live follicles will be kept fresh using our latest technology.
                        The roots in the donor area are extracted using a specialized device. The surgeon makes minor incisions using the sapphire blade in the area to be transplanted and inserts the hair follicles into these incisions.
                    </p>

                </div>

                <div class="col-lg-6">
                    <p>The hair would be placed individually into the patients scalp aiming to give them a more natural look after the transplantation is completed. The implanted area is covered with a bandage. The duration of FUE hair transplantation varies between 6 and 8 hours depending on the number of grafts. The sapphire FUE method causes minimum scarring and bleeding and there are very minimal chances of any kind of infection.

                    </p>
                </div>

                <div class="col-lg-12">
                    <h2 class="mb-3">DHI Hair Transplant Technique
                    </h2>
                    <p>
                        Direct Hair Implant DHI is another method for hair transplant. The doctor will examine patient hair conditions and decide if patient is suitable for this process. This technique is excellent for smaller areas of bald patches or just thinning of hair to add volume to the scalp to enhance the complete look for the patient.
                    </p> <p>
                        A special device called CHOI PEN is used for this procedure. Local anesthesia is administered to the area where the hair follicle will be implanted. Hair follicles are collected and placed aesthetically on the scalp to give a natural look. The fine structure of the pen ensures that the hair follicles will be transplanted into the skin easily and healthy tissues will not be damaged.    </p>
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

    <!-- Analysis -->
    <section id="analysis"class="section-no-border pb-0 m-0 desc-sec mt-5 mb-5">
        <div class="container process-container">
            @livewire('hair-analysis', ['formPosition' => 'Hair Analysis', 'data' => $data])
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
                        <h2>Who is suitable for DHI (Choi) Hair Transplantation?
                        </h2>
                       <p>Male pattern hair loss is caused by the male hormone killing hair-producing cells. For this reason, first the hair gets thinner, then the growth of the hair slows down and the hair starts to fall out. DHI (Choi) hair transplantation method can be applied to people who suffer from male pattern hair loss.

                       </p>
 <h2>Who Is FUE Hair Transplant Suitable For?
 </h2>
                        <p>Provided that the donor area of FUE hair transplantation is sufficient;
                        </p>
                        <ul>
                            <li>Hair loss due to hormones, aging or genetic factors,</li>
                            <li>    Bare areas in the hair or eyebrows as a result of burns,</li>
                            <li>   It can be applied to people who have bald areas due to hair loss after illness or aesthetic operation.</li>
                        </ul>
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

    <!-- Analysis -->
    <section id="analysis"class="section-no-border pb-0 m-0 desc-sec mt-5 mb-5">
        <div class="container process-container">
            @livewire('hair-analysis', ['formPosition' => 'Hair Analysis', 'data' => $data])
        </div>
    </section>

    <!-- Document -->
    <section class="section section-dark section-background mt-0 mb-0"
    >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h2 style="text-align: center;" class="text-10">Our Documents</h2>
                    <div class="doc-img row">
                        <div class="dmg1 col-lg-4"> <img src="{{asset('img/global/documents/1.jpg')}}" alt=""></div>
                        <div class="dmg1 col-lg-4"> <img src="{{asset('img/global/documents/2.jpg')}}" alt=""></div>
                        <div class="dmg1 col-lg-4"> <img src="{{asset('img/global/documents/3.jpg')}}" alt=""></div>
                        <div class="dmg1 col-lg-4"> <img src="{{asset('img/global/documents/7.jpg')}}" alt=""></div>
                        <div class="dmg1 col-lg-4"> <img src="{{asset('img/global/documents/4.jpg')}}" alt=""></div>
                        <div class="dmg2 col-lg-2"> <img src="{{asset('img/global/documents/5.jpg')}}" alt=""></div>
                        <div class="dmg2 col-lg-2   "> <img src="{{asset('img/global/documents/6.jpg')}}" alt=""></div>

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
        .slider-sec:before, section.section.horizontal-form:before {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            background: linear-gradient(183deg, #000 -55%, #000000 94% 0%);
            opacity: 0.35;
        }
    </style>
@endpush
