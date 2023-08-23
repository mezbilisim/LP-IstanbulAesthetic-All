@extends('layouts.master')
@section('page_title', 'Face lift surgery - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Assoc. Prof. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Face Lift Surgery<br> in Turkey</h1>
                    <p class="custom-font-size-1">
                        The Face Lift surgery ensures a youthful face and a fresher appearance. Face lift surgery is especially applied in patients with increased sagging in the jaw line and deepening of the fold, which we call the nasolabial fold, between the cheek and lips.
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
                    <h2>Differences Between Face Lift Surgeries</h2>
                    <p>
                       <b> Mini Face Lift:</b> It is performed to correct sagging in the lower jaw line and jowl area (in the lower face area). The incision line starts in front of the ear and turns under the earlobe towards the back of the ear.
                        <br><br>
                     <b>Full facelift: </b>   this technique is an extended version of mini facelift. In addition to the benefits of the Mini facelift procedure, the temples, eye corners and eyebrows are lifted as well with this operation. Cheeks and cheekbones are more effectively lifted in the Full Facelift surgery compared to the Mini Facelift surgery. In a full facelift, the incision starts from the scalp in the temporal region, and continues downwards as a mini facelift.
                        As a result, patients' faces are aimed to look decades younger than their biological age.

                    </p>

                    <h3>Deep Plane Facelift</h3>
<p>Facelift surgery is not a skin lift alone. In every kind of Facelift surgery, soft tissue under the skin named SMAS has to be lifted as well. There are a few techniques in lifting the SMAS tissue. The SMAS lift, SMASectomy, and the deep plane SMAS lift are some of the techniques used in lifting the SMAS tissue. In the deep plane SMAS surgery, the results are more affective and long-termed.</p>

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
                    Assoc. Prof. Dr. Daghan Isik has over twenty years of experience. Dr. Daghan
                    is specialized in two fields; aesthetic plastic surgery and oromaxillofacial surgery. Dr. Daghan is an expert in deep plane techniques, which has gained popularity in the last decade, and he is also capable of performing all the Facelift techniques.

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


    <!-- Before - After -->
    <section id="before-after" class="ba-en-sec section section-no-border p-0 pb-5 pt-5 mb-0">
        <div class="container before-after-container">
            <div class="row align-items-center justify-content-between pb-1">
                <div class="text-center d-flex align-items-center flex-column">
                    <h2 class="bf-head bf-head-en">BEFORE - AFTER</h2>
                    <p class="col-10">
                        You can also contact us to have face lift surgery. Our patient consultants
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





    <section class="mt-5 mb-3 pb-4 pt-5">
        <div class="container text-left">
            <div class="row">

                <div class="col-lg-6">
                    <h2 class="mb-3">Facelift Surgery in Turkey</h2>
                    <p>
                        It's essential to research reputable clinics and experienced surgeons who specialize in facelift to ensure a successful and satisfying outcome.

                        Turkey has emerged as a popular destination for facelift surgeries due to its affordable prices without compromising quality, as Turkey is one of the leading countries in the field of aesthetic surgery. The cost of a facelift surgery in Turkey can vary based on factors such as the specific procedures chosen, clinic reputation, and additional services. On average, prices can be significantly lower compared to other countries, with potential cost savings of 50% or more.



                    </p>
                </div>

                <div class="col-lg-6">
                    <h2 class="mb-3">Advantages of Facelift Surgery in Turkey</h2>
                    <p>
                        Facelift Surgery in Turkey offers several advantages, including high-quality healthcare, affordability, and a popular destination for medical tourism. The country boasts a well-established healthcare system, modern clinics, and experienced surgeons specializing in facial aesthetics. The cost of procedures in Turkey is often significantly lower than in other countries, without compromising on quality due to the Turkish Lira’s lower exchange rate against major currencies.

                        Additionally, Turkey's cultural richness, beautiful landscapes, and welcoming atmosphere make it an appealing choice for those seeking both cosmetic enhancements and a memorable vacation.

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
                        <h2>Post-Surgery Process</h2>
                        <p>
                            After the facelift procedure, the patients are followed up in hospital for a certain period and then discharged. After discharge, the routine medications are given to the patients and their incision care and dressings are done by our clinic’s nurses at the 5-star hotel. Therefore, we ensure that our patients should have a quality rest after the facelift surgery. They should use the special garments clothed a few days after their surgery by the nurses of the clinic on a regular basis for 3 weeks. After the discharge, patients are transferred in VIP transportation to the doctor’s clinic from the hotel for the doctor’s personal check up.
                        </p>
                        <h2>What Should Patients Do During Recovery After Facelift Surgery?</h2>
                        <p>After the surgery, the patients need to take the medications given by the doctor. The doctor will give the information on the duration of the garments’ usage. The necessary dressings materials will be given to the patient before their return to their home country. The patient is informed of their personal aftercare.</p>
                        <h2>The Price of the Facelift Surgery in Turkey</h2>
                        <p>The prices can change depending on the type of the facelift procedures (Fullface, Mini Facelift), the patient’s previous surgeries, and the diseases the patient has. You can achievea youthful face with a budget friendly cost, that includes an experienced surgeon, surgery in an A+ hospital, 5-star hotel accommodation, VIP transportation, and nurse care. For an accurate price, please contact us.</p>
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
