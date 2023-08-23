@extends('layouts.master')
@section('page_title', 'Cambio de imagen para mamás en Turquía - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Slider -->
    <section class="section slider-sec section-concept section-no-border section-dark section-angled section-angled-reverse pb-0 pb-md-5 mb-md-5 pt-5 m-0"
             id="section-concept"
             style="background-image: url({{ asset('img/landing/' . $data['landing_slug'] . '/header_bg.jpg') }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-6 mb-5">
                    <h5 class="text-primary-light font-weight-bold mb-1 dent-ist">Assoc. Prof. Dağhan Işık</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">Cambio de imagen para mamás <br> en Turquía</h1>
                    <p class="custom-font-size-1">
                        Mommy makeover es un tipo combinado de cirugía que tiene como objetivo restaurar el cuerpo de la
                        madre, que ha sufrido cambios debido al embarazo y al período posparto, a su condición preparto
                        (antes del embarazo).
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
                    <h2>Cirugía de cambio de imagen de mamá</h2>
                    <p>
                        El cambio de imagen para mamá generalmente implica estética de senos, abdominoplastia y liposucción.
                        Los tipos de cirugías realizadas para estas partes del cuerpo están sujetos a variaciones entre pacientes.
                    </p>
                    <p>
                        El cambio de imagen para mamás consiste básicamente en abdominoplastia, estética de senos y liposucción.
                        Las estrías pueden ocurrir en la piel abdominal secundarias al embarazo. Estas marcas también son
                        una indicación de mala calidad de la piel. Además, los músculos abdominales pueden debilitarse
                        y separarse (diástasis del recto) durante el embarazo. Cuando se realiza mommy makeover, se elimina
                        el exceso de piel abdominal y se reaproximan los músculos abdominales.
                    </p>
                    <p>
                        Por lo tanto, el abdomen del paciente se verá firme, en forma y atlético. Además, se reducirá la
                        circunferencia de la cintura con la liposucción realizada en flancos, espalda y espalda baja.
                        Como resultado, la cintura será más estrecha y lucirá atlética y encantadoramente curvada.
                    </p>
                </div>

                <!-- Treatment Summary -->
                <div class="col-lg-5 under-slider-right position-relative">
                    <div class="image-boxes first-img">
                        <img class="image-boxes-img border-radius" src="{{ asset('img/landing/' . $data['landing_slug'] . '/info-box-img.jpg') }}" alt="{{$data['landing_slug']}} ">
                    </div>
                    <div class="info-right-1">
                        <h3 class="tedavi">Resumen Del <em>Tratamiento </em></h3>
                        <p>
                            Para obtener información detallada, puede contactarnos a través de WhatsApp o llenando el
                            formulario de consulta gratis.
                        </p>

                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Tiempo de operacion</h4>
                                        <p class="mb-4">2 - 6 horas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-person-booth"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Tiempo de recuperación</h4>
                                        <p class="mb-4">6 semana</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-box">
                                    <div class="box-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Reserva</h4>
                                        <p class="mb-4">1 mes</p>
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
                                        <p class="mb-4">general</p>
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
                    Si los senos siguen siendo más grandes que su tamaño normal al final del embarazo, se realiza una
                    cirugía de reducción de senos. Si el volumen de los senos disminuye, se puede realizar una cirugía
                    de aumento de senos con implante mamario y si se presenta tanto pérdida de volumen como flacidez,
                    se puede realizar una cirugía de levantamiento de senos y prótesis.
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

    <!-- Before - After

    <section id="before-after" class="ba-es-sec section section-no-border p-0 pb-5 pt-5 mb-0">
        <div class="container before-after-container">
            <div class="row align-items-center justify-content-between pb-1">
                <div class="text-center d-flex align-items-center flex-column">
                    <h2 class="bf-head bf-head-es">ANTES - DESPUÉS</h2>
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
    </section> -->

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
        </div>
    </section>
  -->
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
                </div>
   -->
                <div class="col-lg-8">
                    <h2>¿Quiénes son buenos candidatos para <br>Mommy Makeover?</h2>
                    <p>
                        La cirugía de cambio de imagen de mamá se puede realizar 1 año después del parto como muy pronto.
                        La finalización del período de lactancia es crucial, especialmente para las cirugías de mama.
                        El momento más adecuado para las cirugías mamarias es 1 año después de finalizar la lactancia.
                        Si la cirugía mamaria se realiza en un período anterior, el volumen de la mama no se puede evaluar
                        con exactitud ya que los conductos mamarios de la mama están activos y el tejido mamario se
                        vuelve vulnerable a las infecciones.
                    </p>

                    <h2>¿Cómo se realiza Mommy Makeover?</h2>
                    <p>
                        Mommy makeover es una cirugía que dura aproximadamente de 5 a 6 horas y se puede realizar bajo
                        anestesia general. Se realizan estudios preoperatorios de rutina y los pacientes son evaluados
                        por un anestesiólogo. Se obtienen formularios de consentimiento relacionados de todos los pacientes
                        antes de las cirugías y se toman fotografías de los pacientes desde los ángulos correctos.
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
                        En mi propia práctica, prefiero tomar fotografías un día antes de la cirugía. En la mañana del
                        día de la cirugía, se planifica la cirugía y se hacen dibujos de las regiones a operar. Aunque
                        el curso varía de un paciente a otro, el procedimiento de cambio de imagen para mamás comienza
                        con la liposucción. Después de que se realiza la eliminación de grasa con el procedimiento de
                        liposucción, se lleva a cabo la abdominoplastia.
                    </p>
                    <p>
                        Finalmente, se realiza la cirugía mamaria. Los drenajes se colocan en las regiones donde se
                        realiza la liposucción, las regiones mamarias y los sitios de abdominoplastia durante la cirugía.
                        El objetivo de colocar estos drenajes es drenar la sangre y los líquidos que se puedan acumular
                        en el sitio de la cirugía y ayudar a la eliminación del edema. Se realiza vendaje de heridas y los
                        pacientes usan corsés al final de la cirugía. Una vez que el paciente se recupera por completo
                        de la anestesia, se transfiere al paciente a la clínica para pacientes hospitalizados.
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
                        <h2>¿Qué deben cuidar los pacientes después del Mommy Makeover?</h2>
                        <p>
                            Los pacientes deben estar físicamente activos al máximo después de los procedimientos de mommy makeover.
                            Cuanto más tiempo caminen los pacientes sin cansarse, más rápida será la recuperación postoperatoria.
                            Un menor consumo de azúcar y sal después de la cirugía asegurará una regresión más rápida del edema.
                            Dado que los pacientes se someten a una abdominoplastia, no deben cargar ni levantar objetos
                            pesados durante 6 semanas. Se recomienda a las pacientes que se someten a una cirugía mamaria
                            que no levanten demasiado los brazos durante 6 semanas.
                        </p>

                        <h2>¿Qué tal el período de recuperación postoperatoria?</h2>
                        <p>
                            Los pacientes deben comenzar a caminar inmediatamente después del cambio de imagen para mamás.
                            Aunque la movilización será difícil durante varios días debido a los drenajes, es muy importante caminar en este período.
                        </p>
                        <p>
                            Los drenajes se retiran en promedio de 5 a 6 días después de la cirugía y los pacientes pueden
                            moverse más fácilmente a partir de entonces. Doblar el cuerpo ligeramente hacia adelante
                            mientras camina aliviará la tensión en el abdomen en la primera semana, especialmente después
                            de la abdominoplastia. Los pacientes pueden caminar fácilmente en posición vertical a partir
                            de entonces. Los pacientes pueden volver a su vida diaria habitual 2 semanas después del
                            cambio de imagen para mamás. Se recomienda a los pacientes que eviten levantar objetos
                            pesados y levantar demasiado los brazos durante aproximadamente 6 semanas después de la cirugía.
                        </p>
                    </div>

                    <!-- Hasta Yorumları -->
                    <div id="comments" class="testimonial-block mt-5">
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-img">
                                <img src="{{ asset('img/global/review.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2 font-weight-bold text-7">Reseñas de Pacientes Satisfechos</h4>
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
                                <h4 class="mb-2">Preguntas Frecuentes</h4>
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
                            <span>Disfruta de Estambul de la mejor manera <br>posible alojándote <strong> en Hoteles VIP.</strong> </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 right-why position-relative">
                    <h3 class="why-head tedavi text-sm-5"><em>Planifique Su </em>Viaje Médico</h3>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/transfer.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">01</span>
                            <h4 class="mb-2">Transporte</h4>
                            <p class="mb-4">
                                Cuando llegue a Estambul, su servicio VIP lo estará esperando. Desde el aeropuerto,
                                diríjase a su hotel de 5 estrellas, donde podrá registrarse e instalarse de inmediato.
                                Pase el resto del día de llegada con su oportunidad reservada para relajarse y conocer la ciudad.
                            </p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/treatment.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">02</span>
                            <h4 class="mb-2">Tratamiento</h4>
                            <p class="mb-4">
                                El día del procedimiento, su servicio de transporte VIP lo llevará del hotel a la clínica.
                                Cuando vengas a la clínica, conocerás al equipo de expertos que realizarán tu Mommy Makeover.
                                En la consulta se te explicarán todas las etapas de tu tratamiento y a ti.
                            </p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-img">
                            <img src="{{ asset('img/landing/' . $data['landing_slug'] . '/doctor.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info mt-2">
                            <span class="info-spam">03</span>
                            <h4 class="mb-2">Seguimiento Médico</h4>
                            <p class="mb-4">
                                Nuestro médico seguirá en contacto con usted después de la cirugía. El Assoc. Prof. Dağhan Işık
                                le informará cuándo vendrá para los controles postoperatorios.
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
