@extends('layouts.master')
@section('page_title', 'Mamma Makeover in Turchia - Assoc. Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Assoc. Prof. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Mommy Makeover in Turchia</h1>
                    <p class="custom-font-size-1">
                        Il restyling della mamma è un tipo di intervento chirurgico combinato che mira a riportare
                        il corpo della madre, che ha subito i cambiamenti dovuti alla gravidanza e al periodo postpartum,
                        alla sua condizione pre-partum (prima della gravidanza).
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
                    <h2>Chirurgia di rifacimento della mamma</h2>
                    <p>
                        Il rifacimento della mamma di solito comporta l'estetica del seno, l'addominoplastica e la liposuzione.
                        I tipi di interventi chirurgici eseguiti per queste parti del corpo sono soggetti a variazioni tra i pazienti.
                    </p>
                    <p>
                        Il makeover della mamma coinvolge fondamentalmente l'addominoplastica, l'estetica del seno e la liposuzione.
                        Le smagliature possono verificarsi nella pelle addominale secondaria alla gravidanza. Questi segni sono anche
                        un'indicazione di scarsa qualità della pelle. Inoltre, i muscoli addominali possono indebolirsi e separarsi
                        (diastasi del retto) durante la gravidanza. Quando viene eseguito il restyling della mamma, la pelle addominale
                        in eccesso viene rimossa e i muscoli addominali vengono riavvicinati.
                    </p>
                    <p>
                        Pertanto, l'addome del paziente apparirà sodo, in forma e atletico. Inoltre, la circonferenza della vita sarà ridotta
                        con la liposuzione eseguita su fianchi, schiena e fondoschiena. Di conseguenza, la vita sarà più stretta e avrà un
                        aspetto atletico e affascinante.
                    </p>
                </div>

                <!-- Treatment Summary -->
                <div class="col-lg-5 under-slider-right position-relative">
                    <div class="image-boxes first-img">
                        <img class="image-boxes-img border-radius" src="{{ asset('img/landing/' . $data['landing_slug'] . '/info-box-img.jpg') }}" alt="{{$data['landing_slug']}} ">
                    </div>
                    <div class="info-right-1">
                        <h3 class="tedavi"><em>Riepilogo del </em> trattamento</h3>
                        <p>
                            Per informazioni dettagliate, puoi contattarci tramite WhatsApp o compilando
                            gratuitamente il modulo di consulenza.
                        </p>

                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Tempo di funzionamento</h4>
                                        <p class="mb-4">2 - 6 ora</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-person-booth"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">I tempi di recupero</h4>
                                        <p class="mb-4">6 settimana</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Prenotazione</h4>
                                        <p class="mb-4">1 al giorno</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-bed"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Anestesia</h4>
                                        <p class="mb-4">generale</p>
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
                    Se il seno rimane più grande delle loro dimensioni normali alla fine della gravidanza,
                    viene eseguito un intervento chirurgico di riduzione del seno. Se il volume del seno diminuisce,
                    è possibile eseguire un intervento di aumento del seno con protesi mammaria e se si verificano sia
                    perdita di volume che cedimenti, è possibile eseguire un intervento chirurgico
                    di sollevamento del seno e protesi.
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
 <!-- before after
    <section id="before-after" class="ba-it-sec section section-no-border p-0 pb-5 pt-5 mb-0">
        <div class="container before-after-container">
            <div class="row align-items-center justify-content-between pb-1">
                <div class="text-center d-flex align-items-center flex-column">
                    <h2 class="bf-head bf-head-it">PRIMA  DOPO</h2>
                    <p class="col-10">
                        You can also contact us to have mommy makeover surgery. Our patient consultants
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
-->
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

    <!-- Makeover Analysis
    <section id="analysis" class="section section-no-border pb-0 m-0  desc-sec mb-5">
        <div class="container teeth-container">
            @livewire('makeover-analysis', ['formPosition' => 'Makeover Analysis', 'data' => $data])
        </div>  -->
    </section>
    <!-- İmplant / Tedavi Özeti -->
    <section class="section section-no-border">
        <div class="container">
            <div class="row justify-content-between">
                <!-- What is a zircon tooth? -->
               <!-- <div class="col-lg-4">
                    <div class="feature-box-img lr-img">
                        <video class="videobox" width="100%" height="510" controls>
                            <source src="{{ asset('img/landing/' . $data['landing_slug'] . '/patient-video.mp4') }}" type="video/mp4">
                            <source src="{{ asset('img/landing/' . $data['landing_slug'] . '/patient-video.ogg') }}" type="video/ogg">
                        </video>
                    </div>
                </div> -->

                <div class="col-lg-12">
                    <h2>Chi sono i buoni candidati per  Mommy Makeover?</h2>
                    <p>
                        L'intervento di rifacimento della mamma può essere eseguito al più presto 1 anno dopo il parto.
                        Il completamento del periodo di allattamento al seno è fondamentale soprattutto per gli
                        interventi chirurgici al seno.
                    </p>
                    <p>
                        Il momento più adatto per gli interventi chirurgici al seno è 1 anno dopo il completamento
                        dell'allattamento al seno. Se l'intervento chirurgico al seno viene eseguito in un periodo
                        precedente, il volume del seno non può essere valutato esattamente poiché i dotti mammari
                        nel seno sono attivi e il tessuto mammario diventa vulnerabile alle infezioni.
                    </p>

                    <h2> Come viene eseguito Mommy Makeover?</h2>
                    <p>
                        Il restyling della mamma è un intervento chirurgico che dura dalle 5 alle 6 ore e può essere eseguito
                        in anestesia generale. Vengono eseguiti esami preoperatori di routine e i pazienti vengono valutati
                        dall'anestesista. I relativi moduli di consenso vengono ottenuti da tutti i pazienti prima che gli
                        interventi chirurgici e le fotografie dei pazienti vengano scattate dall'angolazione giusta.
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
                <div class="col-lg-12">
                    <p>
                        Nel mio studio preferisco fotografare un giorno prima dell'intervento. Nella mattinata del giorno
                        dell'intervento si pianifica l'intervento chirurgico e si fanno i disegni per le regioni da operare.
                        Sebbene il decorso vari da paziente a paziente, la procedura di sollevamento della mamma inizia con la
                        liposuzione. Dopo aver eseguito la rimozione del grasso con la procedura di liposuzione, viene eseguita
                        l'addominoplastica.
                    </p>
                    <p>
                        Infine, viene eseguito un intervento chirurgico al seno. I drenaggi vengono posizionati nelle regioni in
                        cui viene eseguita la liposuzione, nelle regioni del seno e nei siti di addominoplastica durante l'intervento
                        chirurgico. Lo scopo del posizionamento di questi drenaggi è quello di drenare il sangue e i liquidi che possono
                        accumularsi nel sito chirurgico e favorire l'eliminazione dell'edema. Viene eseguita la medicazione della ferita
                        e al termine dell'intervento i pazienti indossano i corsetti. Dopo che il paziente si è completamente ripreso
                        dall'anestesia, il paziente viene trasferito alla clinica di degenza.
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
                        <h2>Di cosa dovrebbero prendersi cura i pazienti dopo il rifacimento della mamma?</h2>
                        <p>
                            I pazienti devono essere fisicamente attivi nella massima misura dopo le procedure di sollevamento della mamma.
                            Più i pazienti camminano senza stancarsi, più veloce è il recupero postoperatorio.
                            Un minor consumo di zucchero e sale dopo l'intervento chirurgico garantirà una più rapida
                            regressione dell'edema. Poiché i pazienti vengono sottoposti ad addominoplastica, non devono
                            trasportare o sollevare oggetti pesanti per 6 settimane. Si raccomanda alle pazienti che subiscono
                            un intervento chirurgico al seno di non alzare troppo le braccia per 6 settimane.
                        </p>

                        <h2>Che ne dici del periodo di recupero postoperatorio?</h2>
                        <p>
                            I pazienti dovrebbero iniziare a camminare subito dopo il cambio di look della mamma. Anche se
                            la mobilitazione sarà difficile per diversi giorni a causa degli scarichi, è fondamentale camminare
                            in questo periodo.
                        </p>
                        <p>
                            I drenaggi vengono rimossi in media da 5 a 6 giorni dopo l'intervento chirurgico e in seguito i pazienti
                            possono muoversi più facilmente. Piegare leggermente il corpo in avanti mentre si cammina allevia lo sforzo
                            nell'addome nella prima settimana, specialmente dopo l'addominoplastica. I pazienti possono camminare facilmente
                            in posizione eretta in seguito. I pazienti possono tornare alla normale vita quotidiana 2 settimane dopo il
                            rifacimento della mamma. Si raccomanda ai pazienti di evitare di sollevare oggetti pesanti e di alzare troppo
                            le braccia per circa 6 settimane dopo l'intervento.
                        </p>
                    </div>

                    <!-- Hasta Yorumları -->
                    <div id="comments" class="testimonial-block mt-5">
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-img">
                                <img src="{{ asset('img/global/review.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2 font-weight-bold text-7">Recensioni di pazienti soddisfatti</h4>
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
                                <h4 class="mb-2">Domande frequenti</h4>
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
                            <span>Goditi Istanbul nel miglior modo possibile soggiornando negli <strong> Hotel VIP.</strong> </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 right-why position-relative">
                    <h3 class="why-head tedavi text-sm-5"><em>Organizza il tuo viaggio medico </em></h3>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/transfer.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">01</span>
                            <h4 class="mb-2">Trasporto</h4>
                            <p class="mb-4">
                                Quando raggiungi Istanbul, il tuo servizio VIP ti aspetta. Dall'aeroporto, raggiungi il tuo hotel a 5
                                stelle, dove potrai effettuare il check-in e sistemarti immediatamente. Trascorri il resto del giorno
                                di arrivo con la tua opportunità riservata per rilassarti e conoscere la città.
                            </p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/treatment.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">02</span>
                            <h4 class="mb-2">Trattamento</h4>
                            <p class="mb-4">
                                Il giorno della procedura, il tuo servizio navetta VIP ti porterà dall'hotel alla clinica.
                                Quando verrai in clinica, incontrerai il team di esperti che eseguirà il tuo Mommy Makeover.
                                Nella consultazione, a te e a te verranno spiegate tutte le fasi del trattamento.
                            </p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/doctor.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">03</span>
                            <h4 class="mb-2">Follow-up medico</h4>
                            <p class="mb-4">
                                Il nostro medico continuerà ad essere in contatto con te dopo l'intervento chirurgico.
                                Assoc. Il Prof. Dağhan Işık ti avviserà quando verrai per i controlli post-operatori.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Makeover Analysis
    <section id="analysis" class="section section-no-border pb-0 m-0  desc-sec mb-5">
        <div class="container teeth-container">
            @livewire('makeover-analysis', ['formPosition' => 'Makeover Analysis', 'data' => $data])
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

    </style>
@endpush
