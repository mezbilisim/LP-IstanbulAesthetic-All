@extends('layouts.master')
@section('page_title', 'Karın Germe Ameliyatı - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Doç.  Dr. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3"> Türkiye’de Karın <br>Germe Ameliyatı</h1>
                    <p class="custom-font-size-1">
                        Abdominoplasti olarak da bilinen karın germe ameliyatı; karın bölgesindeki fazla yağ ve derinin
                        alındığı, ayrılmış veya gevşemiş karın kaslarının birleştirilip sıkılaştırılmasıyla daha düz ve
                        sıkı bir karın profilinin oluşturulduğu estetik bir operasyondur.
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
                    <h2>Kimler Karın Germe İçin İyi Bir Adaydır?</h2>
                    <ul>
                        <li> Karında sarkıklık ve deri fazlalığı olan kişiler,</li>
                        <li> Fiziksel olarak sağlıklı ve kilosunda dalgalanma olmayan sabit bir ağırlığa sahip kişiler,</li>
                        <li> Sigara kullanmayanlar,</li>
                        <li> Karınlarının görünümünden rahatsız olan bireyler olarak özetlenebilir.</li>

                    </ul>
                    <p> Fit bir karına sahip olmak hem erkeklerin hem de kadınların hayatları boyunca gerçekleştirmek
                        istedikleri bir hayaldir. Aşırı kilo alıp verme veya hamilelik gibi nedenlerle istenilen bu görünüm
                        kaybedilebilir. Birkaç farklı tipi olan karın germe ameliyatı ile karın derisindeki sarkık dokuların
                        alınması ve gevşek kasların onarılması mümkündür.
                    </p>

                </div>

                <!-- Treatment Summary -->
                <div class="col-lg-5 under-slider-right position-relative">
                    <div class="image-boxes first-img">
                        <img class="image-boxes-img border-radius" src="{{ asset('img/landing/' . $data['landing_slug'] . '/info-box-img.jpg') }}" alt="{{$data['landing_slug']}} ">
                    </div>
                    <div class="info-right-1">
                        <h3 class="tedavi"><em>Tedavi</em>  Özeti</h3>
                        <p>
                            Detaylı bilgi almak için WhatsApp üzerinden bizimle iletişime geçebilir veya
                            ücretsiz danışma formunu doldurabilirsiniz.
                        </p>

                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Operasyon Süresi</h4>
                                        <p class="mb-4">4 - 5 Saat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-window-minimize"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Korse Kullanımı</h4>
                                        <p class="mb-4">4 -6 hafta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-hospital"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Hastanede Yatış</h4>
                                        <p class="mb-4">2 gece </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-bed"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Anestezi Türü</h4>
                                        <p class="mb-4">genel anestezi</p>
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
                    Sonuç olarak yoğun egzersiz ve spor aktiviteleri ile bu görünümü elde etmeye çalışıyoruz.
                    Ancak bazı nedenlerden dolayı ne kadar yoğun diyet ve egzersiz yapılırsa yapılsın istenilen
                    görünüm elde edilemeyebilir. Bu durumda hastalar uygun karın germe ameliyatları ile bu görünüme kavuşabilirler.
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



    <!-- Before - After -->
    <section id="before-after" class="ba-en-sec section section-no-border p-0 pb-5 pt-5 mb-0">
        <div class="container before-after-container">
            <div class="row align-items-center justify-content-between pb-1">
                <div class="text-center d-flex align-items-center flex-column">
                    <h2 class="bf-head bf-head-tr">ÖNCESİ - SONRASI</h2>
                    <p class="col-10">
                        Karın germe ameliyatı yaptırmak için bizimle iletişime geçebilirsiniz.
                        Hasta danışmanlarımız en kısa sürede geri dönüş sağlayacaktır.
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

                    <a type="button" class="btn btn-modern btn-rounded btn-primary mb-2" href="{{ route($data['landing_slug'] . '.gallery', ['locale' => app()->getLocale()]) }}">Tümünü Görüntüle</a>
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
                        <h2>İyileşme Döneminde Beni Ne Bekliyor?</h2>
                        <p>
                            Ameliyattan hemen sonra ameliyat bölgesinde şişmeyi en aza indirmek ve ameliyat sonrası karnınızın
                            iyileşmesini desteklemek için korseler kullanılır. Küçük ve ince drenler geçici olarak cilt altına
                            yerleştirilebilir. Bunlar genellikle ameliyattan 2 ile 3 gün sonra çıkarılır.
                        </p>
                        <p>
                            Ameliyattan sonra size aşağıdaki uygulamalar sunulacaktır.
                        </p>
                        <p>
                            Ameliyat bölgesinin pansumanı ve drenlerin bakımı yapılacaktır.
                        </p>
                        <p>
                            İyileşmeye yardımcı olmak ve enfeksiyon olasılığını azaltmak için ağızdan alınacak veya damardan
                            uygulanacak ilaçlar verilecektir.
                        </p>
                        <p>
                            Ameliyat bölgesini korumak ve genel sağlığınızın bozulmaması için yapılması gerekenler olacaktır.
                            Doktorunuzun yataktaki yatış şekliniz gibi birçok konuda bir dizi tavsiyesi olacaktır. Yapmanız
                            gereken egzersizler, yemek yediğiniz saatler, ayağa kalktığınız zamanlar ve ilk başta nasıl
                            yürüdüğünüzü kontrol edecektir.
                        </p>
                        <h2>Ameliyat Sonrası İyileşme Dönemi Nasıldır?</h2>
                        <p>
                            Ameliyattan sonra hastalar iki gece hastanede kalır. Bu dönemde ağrı kesici kullanıldığı için ağrı
                            kontrol altına alınır. Hastalar ameliyattan sonra 6-8. Saatte  hareket ettirilir ve ayağa kalkmasına
                            yardım edilir.
                        </p>
                        <p>
                            Hastalar taburcu olduktan sonra ağrıyı kontrol altına almak için cerrahın reçete ettiği ağrı
                            kesicileri kullanırlar. Bir hafta dinlendikten sonra hastalar günlük hayatlarına dönebilir ve
                            masa başı işlerine başlayabilirler.
                        </p>
                        <p>
                            Dikişlerin tamamı cilt altı dikiş olduğu için işlem sonrası dikiş gerekli değildir.

                        </p>
                    </div>

                    <!-- Hasta Yorumları -->
                    <div id="comments" class="testimonial-block mt-5">
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-img">
                                <img src="{{ asset('img/global/review.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2 font-weight-bold text-7">Mutlu Hasta Yorumları</h4>
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
                                <h4 class="mb-2">Sık Sorulan Sorular</h4>
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
        h3.why-head.tedavi.text-sm-5 {
            margin-bottom: 30px!important;
        }
        @media (min-width: 768px) {
            .medical-trip-col .image-box.p-relative {
                height: 84.5%!important;
            }
        }
        #header .header-logo img {
            image-rendering: auto!important;
        }
    </style>
@endpush
