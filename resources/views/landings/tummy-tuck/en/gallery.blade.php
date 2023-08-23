@extends('layouts.master')
@section('page_title', 'Gallery - Dr. Dağhan Işık, MD')
@section('content')
    <!-- Before - After -->
    <section class="section section-no-border pb-0 m-0 mb-5 pb-3">
        <div class="container py-2">
            <h2 class="bf-head bf-head-en">BEFORE - AFTER</h2>
            <p class="col-9" style="text-align:center; margin:auto; margin-bottom: 40px;">
                You can also contact us to have tummy tuck surgery. Our patient consultants
                will provide feedback as soon as possible.
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
        .lang {
            display: none!important;
        }

        .portfolio-item {
            margin-bottom: 15px;
            margin-top: 15px;
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
