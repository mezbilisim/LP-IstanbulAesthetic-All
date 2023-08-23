@extends('layouts.master')
@section('page_title', 'Galleria - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Before - After
    <section class="section section-no-border pb-0 m-0 mb-5 pb-3">
        <div class="container py-2">
            <h2 class="bf-head bf-head-en">PRIMA - DOPO</h2>
            <p class="col-9" style="text-align:center; margin:auto; margin-bottom: 40px;">
                Puoi anche contattarci per un intervento chirurgico di rifacimento della mamma. I nostri consulenti per
                i pazienti forniranno un feedback il prima possibile.
            </p>


            <div class="row align-items-center ">
                @foreach($beforeAfterPhotos as $photo)
                    <div class="col-12 col-sm-6 col-lg-4" >
                        <div class="portfolio-item">
                            <a class="img-thumbnail d-block lightbox" href="{{ asset('img/landing/before-after/' . $photo['imageName']) }}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{ asset('img/landing/' . $data['landing_slug'] . '/before-after/' . $photo['imageName']) }}" alt="Project Image">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
-->
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
@endsection

{{--Sayfalara özel custom css yazmak için--}}
@push('livewireStyle')
    <style type="text/css">
        .portfolio-item {
            margin-bottom: 15px;
            margin-top: 15px;
        }
    </style>
@endpush
