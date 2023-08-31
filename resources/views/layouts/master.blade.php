<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('page_title')</title>

    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="Landing Page">
    <meta name="author" content="MEZ Bilişim Dijital Ajans">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/twentytwenty/css/twentytwenty.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('css/demos/demo-landing.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('css/skins/skin-landing.css') }}" id="skinCSS">
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}" id="skinCSS">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/intlTel/css/intlTelInput.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('plugins/whatsapp-chat/whatsapp-chat-support.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/whatsapp-chat/components/Font Awesome/css/font-awesome.min.css') }}">--}}
    {{-- <link rel="stylesheet" href="{{ asset('plugins/floating-whatsapp-chat/whatsapp-chat.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('plugins/rangeSlider/rangeSliderStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/super-wheel/superwheel.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

    @if(config('app.env') != 'local')
        {!! $data['custom_header'] ?? null !!}
    @endif

    <!-- Livewire CSS -->
    @livewireStyles
    @stack('livewireStyle')

    @if(in_array(app()->getLocale(), ['ar']))
        <style type="text/css">
            body.rtl .iti.iti--container {
                direction: ltr;
                position: absolute;
            }

            body.rtl .iti__flag-container {
                right: 0!important;
                left: auto!important;
            }

            body.rtl  .form-group i {
                right: 15px;
            }

            body.rtl .form-control {
                padding-left: 15px!important;
                padding-right: 50px!important;
            }

            body.rtl .iti__country-list {
                width: 350px!important;
                direction: rtl!important;
                text-align: right!important;
            }
        </style>
    @endif
</head>
<body data-plugin-page-transition>
<div id="wp-icon" style="position: fixed; left: 20px; bottom: 20px; z-index: 999; cursor: pointer" class="gtm-whatsapp">
    <a href="https://api.whatsapp.com/send?phone={{ $data['phoneLink'] }}" target="_blank" class="gtm-whatsapp">
        <img src="{{ asset('img/global/WhatsApp.svg.webp') }}" class="gtm-whatsapp">
    </a>
</div>

<div class="mobile-footer-bar mobile-footer-bar-open gtm-whatsapp fb-whatsapp" >
    <a href="javascript:void(0)" class="gtm-whatsapp fb-whatsapp fb-btn">
        <i class="fa fa-whatsapp gtm-whatsapp  "></i>  WhatsApp
    </a>
</div>
    <!-- <a href="tel:{{ $data['phoneLink'] }}" target="_blank" class="gtm-phone fb-phone fb-btn">
        <i class="fa fa-phone gtm-phone"></i> {{ $data['phoneText'] }}
    </a>  -->

<div class="body">
    @include('layouts.includes.header')

    <div role="main" class="main">
        @yield('content')
    </div>

    @include('layouts.includes.footer')
</div>

@include('layouts.includes.partials')



<!-- Vendor -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('vendor/lazysizes/lazysizes.min.js') }}"></script>
<script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
<script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>
<script src="{{ asset('vendor/twentytwenty/js/jquery.event.move.js') }}"></script>
<script src="{{ asset('vendor/twentytwenty/js/jquery.twentytwenty.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('plugins/intlTel/js/intlTelInput.min.js') }}"></script>
{{--<script src="{{ asset('plugins/whatsapp-chat/components/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/whatsapp-chat/components/moment/moment-timezone-with-data-10-year-range.min.js') }}"></script>
<script src="{{ asset('plugins/whatsapp-chat/whatsapp-chat-support.js') }}"></script>--}}
<script src="{{ asset('plugins/floating-whatsapp-chat/whatsapp-chat.js') }}"></script>
<script src="{{ asset('plugins/super-wheel/superwheel.js') }}"></script>
<script src="{{ asset('plugins/super-wheel/jquery.transit.min.js') }}"></script>
<!-- Theme Initialization Files -->
<script src="{{ asset('js/theme.init.js') }}"></script>

<!-- Livewire JS -->
@livewireScripts
@stack('livewireScript')

<!-- Examples -->
<script type="text/javascript">
    /* WhatsApp Load */
    /*$('#whatsapp-chat').whatsappChatSupport();*/
    /*whatsappchat.singleUser({
        selector: '#floating-whatsapp',
        name:'jQueryScript',
        phone: '{{ $data['phoneLink'] }}',
        designation: 'jQuery Script',
        image : 'Avatar.jpg'
    });*/
    whatsappchat.multipleUser({
        selector: '#floating-whatsapp',
        users: [
            {
                name:'Nazli Y.',
                phone: '{{ $data['phoneLink'] }}',
                designation: 'Patient Advisor',
                image : '{{ asset('plugins/floating-whatsapp-chat/assets/businesswoman.png') }}'
            },
        ],
        headerMessage: 'Feel free to ask any questions in <strong>WhatsApp</strong>',
        chatBoxMessage: 'Team replies in a minute',
        color: '#25D366',
    });

    $('.mobile-footer-bar').on('click', function () {
        if ($('.mobile-footer-bar').hasClass('mobile-footer-bar-open')) {
            $('.mobile-footer-bar').removeClass('mobile-footer-bar-open').addClass('mobile-footer-bar-close')
            /*document.getElementsByClassName('rs-openChatBtn')[0].style.display = "none";*/
            document.getElementsByClassName('rs-openChat')[0].style.display = "block";
        } else if ($('.mobile-footer-bar').hasClass('mobile-footer-bar-close')) {
            $('.mobile-footer-bar').removeClass('mobile-footer-bar-close').addClass('mobile-footer-bar-open')
            /*document.getElementsByClassName('rs-openChatBtn')[0].style.display = "block";*/
            document.getElementsByClassName('rs-openChat')[0].style.display = "none";
        }
    })

    /* Lucky Spin */
    $(document).ready(function () {
        $('.small-spin').transition({
            right: '12px',
            delay: 1000,
            rotate: '-360deg',
        })
        $('.small-spin-title').transition({
            right: '+=480px',
            delay: 4000
        });
        $('.wheel-toggle, .wheel-overlay').on('click', function () {
            if ($('.wheel_content').is(':hidden')) {
                showWheel(1000)
            } else {
                hideWheel(1000)
            }
        })
    })

    /* International Phone Input Loading */
    loadPhoneInputs()
    function loadPhoneInputs() {
        let phones = document.querySelectorAll('.phone')
        for (let i = 0, len = phones.length; i < len; i++) {
            window.intlTelInput(phones[i], {
                autoHideDialCode: false,
                dropdownContainer: document.body,
                formatOnDisplay: false,
                initialCountry: '{{ $data['phoneLocale'] }}',
                hiddenInput: "full_number",
                nationalMode: false,
                placeholderNumberType: "MOBILE",
                utilsScript: "{{ asset('plugins/intlTel/js/utils.js') }}",
            });
        }
    }

    /* Need Help Block Auto Open */
    runHelpBlock();
    function runHelpBlock() {
        setTimeout(function () {
            if (!$('.exitIntentModal').hasClass('show')) {
                $('.need-help').removeClass('d-none')
                changeFavicon('relieved');
            } else {
                runHelpBlock();
            }
        }, 15000)
    }

    /* Close Need Help Block */
    function closeHelp() {
        $('.need-help').addClass('d-none')
        changeFavicon('self');
    }

    /* Exit Intent Actions */
    let addEvent = function(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        }
        else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    };
    let exitIntent = false;
    addEvent(document, "mouseout", function(event) {
        event = event ? event : window.event;
        let from = event.relatedTarget || event.toElement;
        if ( (!from || from.nodeName === "HTML") && event.clientY <= 100 && exitIntent === false) {
            exitIntent = true;
            $('.exitIntentModal').modal('show');
            changeFavicon('sad');
        }
    });

    /* Close Modal */
    function closeModal(modalID) {
        $(modalID).modal('hide');
        changeFavicon('relieved');
        setTimeout(function () {
            changeFavicon('self');
        }, 2000)
    }

    /* Change Favicon */
    function changeFavicon(type) {
        if (type === 'sad') {
            $('link[rel="shortcut icon"]').attr('href', '{{ asset('img/global/emoji/sad.png') }}')
            $('link[rel="apple-touch-icon"]').attr('href', '{{ asset('img/global/emoji/sad.png') }}')
        } else if (type === 'party') {
            $('link[rel="shortcut icon"]').attr('href', '{{ asset('img/global/emoji/party.png') }}')
            $('link[rel="apple-touch-icon"]').attr('href', '{{ asset('img/global/emoji/party.png') }}')
        } else if (type === 'relieved') {
            $('link[rel="shortcut icon"]').attr('href', '{{ asset('img/global/emoji/relieved.png') }}')
            $('link[rel="apple-touch-icon"]').attr('href', '{{ asset('img/global/emoji/relieved.png') }}')
        } else if (type === 'smile') {
            $('link[rel="shortcut icon"]').attr('href', '{{ asset('img/global/emoji/smile.png') }}')
            $('link[rel="apple-touch-icon"]').attr('href', '{{ asset('img/global/emoji/smile.png') }}')
        } else if (type === 'self') {
            $('link[rel="shortcut icon"]').attr('href', '{{ asset('favicon.ico') }}')
            $('link[rel="apple-touch-icon"]').attr('href', '{{ asset('favicon.ico') }}')
        }
    }

    /* Leave Tab */
    $(document).ready(function () {
        setTimeout(function () {
            $('#new-year-modal').modal('show');
        }, 30000)

        let title = document.title;
        let welcomeTitle = "{{ __('front.intent.welcomeTitle') }}";
        let newTitle = "{{ __('front.intent.newTitle') }}";
        window.onblur = function () {
            document.title = newTitle;
            changeFavicon('party');
        };

        /*$("#wp-icon").transition({
            left: '20px',
            delay: 1000,
            rotate: '360deg',
        })*/

        /*$('.custom-animate-button').transition({
            perspective: '100px',
            rotateY: '180deg'
        });*/

        window.onfocus = function () {
            document.title = welcomeTitle;
            changeFavicon('smile');
            setTimeout(function () {
                document.title = title;
                changeFavicon('self');
            }, 2000)
        };
    })

    /* <=====// Callbacks \\=====> */
    Livewire.on('load:phoneInputs', data => {
        loadPhoneInputs(data);
    })
</script>
</body>
</html>
