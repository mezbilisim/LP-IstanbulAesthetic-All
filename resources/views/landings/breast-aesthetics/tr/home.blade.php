@extends('layouts.master')
@section('page_title', 'Meme Estetiği - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec  section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Doç. Dr. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3"> Meme Estetiği <br>Ameliyatı</h1>
                    <p class="custom-font-size-1">
                        Meme büyüklüğü ve şekli, kadınlar için imajlarının ve özgüvenlerinin çok önemli bir parçasıdır.
                        Bu nedenle memelerinin büyüklüğünden ve şeklinden memnun olmayan kadınlar meme büyütme ameliyatı
                        ile kalıcı çözümlere ulaşmayı tercih etmektedirler.

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
                    <h2>Meme Estetiği kimler için uygundur?</h2>

                    <p> <b>Göğüs estetiği;</b> </p>
                    <ul>
                        <li> Göğüslerinde büyüklük veya şekil açısından asimetri olan kişilere,</li>
                        <li> Göğüslerinin boyutu istediğinden daha küçük olan kişilere,</li>
                        <li> Emzirme veya kilo kaybı nedeniyle memelerde hacim kaybı olan kişilere,</li>
                        <li> Mastektomi sonrası bir veya iki memenin yeniden yapılandırılması gereken kişilere uygulanabilir.</li>
                    </ul>
                    <h2>Silikon Meme İmplantları Güvenli Midir?</h2>
                    <p>2000'li yıllardan beri üretilen silikon jel meme protezleri, periyodik olarak değiştirilmesine gerek
                        kalmadan güvenle kullanılmaktadır. Meme dokusunu büyütmek için en etkili, kalıcı ve güvenilir yöntem
                        silikon meme protezleri ile meme büyütme ameliyatıdır.
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
                                        <p class="mb-4">2 - 6 Saat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-person-booth"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">İyileşme Süresi</h4>
                                        <p class="mb-4">6 hafta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Hastane Yatışı </h4>
                                        <p class="mb-4">1 gece</p>
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
                <blockquote class="custom-blockquote mt-2">
                    Meme Estetiği günümüzde en çok tercih edilen estetik operasyonların başında gelmektedir.
                    Kadınlar için dik ve dolgun bir memeye sahip olmak güzelliğin olmazsa olmazıdır.
                    Ancak anatomik olarak kadın memesi istediği form ve şekilde olmayabilir. Sarkan memelerin düzeltilmesi,
                    küçük memelerin büyütülmesi ve kanser nedeniyle kaybedilen meme dokusunun meme rekonstrüksiyonu gibi
                    durumlarda bu işlem tercih edilmektedir.
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
                        Meme estetiği yaptırmak için bizimle iletişime geçebilirsiniz.
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
    <section class="section horizontal-form section-text-light section-background mt-O mb-0"
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
                    <h2>Meme Estetiği Ameliyatları</h2>
                    <p>
                        Hastanın vücut imajını değiştirmek için kullanılabilen meme büyütme, meme küçültme, meme rekonstrüksiyonu
                        ameliyatları, estetik görünüm sunmasıyla birlikte kişinin vücudu daha iyi hissetmesine yardımcı olur.
                    </p>
                    <p>
                        Meme estetiği ameliyatlarında fazla yağ dokusu alınarak meme küçültme işlemi yapılır
                        ve memeler hafif ve sıkı hale gelir.
                    </p>
                    <p>
                        Meme büyütme operasyonu silikon protez kullanımı ile şeklin yeniden oluşturulmasını,
                        asimetrinin düzeltilmesini sağlar.
                    </p>
                    <p>
                        Meme rekonstrüksiyonu operasyonlarında meme protezi kullanılarak ya da hastanın dokuları memelere
                        eklenerek meme yeniden şekillendirilir.
                    </p>
                    <p>
                        Hastanın vücut imajını değiştirmek için kullanılabilen meme büyütme, meme küçültme, meme rekonstrüksiyonu
                        ameliyatları, estetik görünüm sunmasıyla birlikte kişinin vücudu daha iyi hissetmesine yardımcı olur.
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
                        Meme estetiği ameliyatlarında fazla yağ dokusu alınarak meme küçültme işlemi
                        ve memeler hafif ve sıkı hale gelir.
                    </p>
                    <p>
                        Meme büyütme operasyonu silikon protez kullanımı ile şeklin yeniden
                        oluşturulmasını, asimetrinin düzeltilmesini sağlar.
                    </p>
                    <p>
                        Meme rekonstrüksiyonu operasyonlarında meme protezi kullanılarak ya da hastanın dokuları
                        memelere eklenerek meme yeniden şekillendirilir.
                    </p>

                    <h2>Meme Estetiği Ameliyatı Sonrası Hasta Günlük Hayatına Ne Zaman Döner?</h2>
                    <p>
                        Breast aesthetic surgeries can be divided into two as breast reduction and breast augmentation.
                        Breast lift is a combination of these. In breast augmentation and breast reduction surgeries, our
                        patients usually return to work within 1 week. However, there is less pain in breast reduction
                        surgeries and these patients are expected to recover more easily.
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
                        <h2>Meme Asimetrisi Düzeltme Ameliyatı</h2>
                        <p>
                            Göğüsler arasındaki şekil ve boyut farklılıklarını gidermek için uygulanan cerrahi işleme meme
                            asimetrisi düzeltme ameliyatı denir. Meme asimetrisi düzeltme işlemi kapsamında küçük olan meme,
                            silikon protez ile büyütülebilir. Büyük olan meme ise diğer meme ile eşit olacak şekilde küçültülebilir.
                            Asimetriyi gidermek için memelerden birine veya her ikisine meme dikleştirme ameliyatı uygulanabilir.
                        </p>

                        <h2>Meme Küçültme Ameliyatı</h2>
                        <p>
                            Vücudunuzla orantılı bir meme boyutu elde etmek ve büyük memelere (makromasti) bağlı rahatsızlıkları gidermek
                            için fazla meme dokusu ve derisinin çıkarıldığı bir işlemdir. Vücuda göre orantısız olarak büyük olan göğüsler,
                            hastalar için hem fiziksel hem de duygusal sıkıntıya neden olabilir. , Aşırı büyümüş göğüsleri olan hastalarda
                            boyun ve sırt ağrısı olabilir. Hastalarda ağrı nedeniyle fiziksel aktivite kısıtlılığı olabilir. Bu sınırlama
                            daha fazla kilo alımına neden olabilir. Bu hasta grubu özellikle sutyen askılarının omuzlarına baskı ve iz
                            yapmasından şikayetçidir. Yaz aylarında hijyen sorunları, meme altında kızarıklık ve yaralarla karşılaşabilirler.
                            Göğüslerin büyük olması nedeniyle hastalar öne doğru bir duruşa ve yürüyüşe sahiptir. Çoğu insanda bu duruş
                            bozukluğu güvensiz bir ruh hali izlenimi verir.
                        </p>
                        <p>
                            Meme küçültme ameliyatı genellikle tıbbi sorunları gidermek için yapılsa da yukarıda bahsedilen makromastiye
                            bağlı şikayetleri olmayan ancak memelerinin büyüklüğünden memnun olmayan hastalarda meme küçültme ameliyatı
                            estetik bir işlem olarak da yapılabilmektedir. Bu ameliyat ile meme büyüklüğüne bağlı medikal problemler
                            ortadan kaldırılırken daha estetik göğüsler elde edilir.
                        </p>

                        <h2>Meme Büyütme Ameliyatı
                        </h2>
                        <p>
                            Breast augmentation surgery is a surgical procedure performed to change and improve the fullness
                            and shape of the breast. Although the use of silicone implants is generally preferred in breast
                            augmentation surgery, it is possible to apply breast augmentation aesthetics with the fat transfer
                            method. There are some differences in terms of the application method and permanence of both methods,
                            and as a result of the evaluations made specifically for the person who wants to have breast augmentation
                            aesthetics, it is decided which method will be preferred. If necessary, breast augmentation and breast lift
                            surgery can be applied together.
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
