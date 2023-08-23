@if(config('app.env') != 'local')
    {!! $data['custom_body'] !!}
@endif


<!-- Header -->
<header id="header" class="header-transparent header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 30, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none p-fixed">
        <div class="header-top header-top-small-minheight header-top-simple-border-bottom" style="height: 41px; min-height: 0px; overflow: visible;">
            <div class="container py-2">
                <div class="header-row justify-content-between">
                    <div class="header-column col-auto px-0">
                        <div class="header-row">
                            <div class="header-nav-top slide-text">
                                <marquee direction="left" scrollamounr="4">{{ __('header.champaign-title') }}</marquee>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end col-auto px-0  d-md-flex">
                        <div class="header-row">
                            <nav class="header-nav-top">
                        <!--        <a class="link-top"  href="{{ route('liposuction.home', ['locale' => app()->getLocale()]) }}">Liposuction</a>
                                <a class="link-top"  href="{{ route('breast-aesthetics.home', ['locale' => app()->getLocale()]) }}">Breast Aesthetic</a>
                                <a class="link-top"  href="{{ route('facelift.home', ['locale' => app()->getLocale()]) }}">Facelift</a>
                                <a class="link-top"  href="{{ route('tummy-tuck.home', ['locale' => app()->getLocale()]) }}">Tummy Tuck</a>
                                <a class="link-top"  href="{{ route('gynecomastia.home', ['locale' => app()->getLocale()]) }}">Gynecomastia</a>
                                <a  class="link-top" href="{{ route('mommy-makeover.home', ['locale' => app()->getLocale()]) }}">Mommy Makeover</a>
                                <a class="gallery" href="{{ route($data['landing_slug'] . '.gallery', ['locale' => app()->getLocale()]) }}">{{ __('front.gallery') }}</a>
                          -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column ">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route($data['landing_slug'] . '.home', ['locale' => app()->getLocale()]) }}" class="d-block" data-hash data-hash-offset="120">
                                <img src="{{ asset('img/global/'.$data['adLocale'].'-logo.png') }}" alt="Logo" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="d-none d-sm-inline-flex order-1 order-lg-2 ml-2">
                            <ul class="header-extra-info">
                                <li class="m-0">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <ul class="social pl-0">
                                            <li>
                                                <a class="btn btn-success btn-rounded gtm-whatsapp"
                                                   href="https://api.whatsapp.com/send?phone={{ $data['phoneLink'] }}" target="_blank">
                                                    <img src="{{ asset('img/global/icon/wp.svg') }}" class="gtm-whatsapp" width="24px" alt="whatsapp">
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn btn-rounded btn-gradient-primary gtm-phone" href="tel:{{ $data['phoneLink'] }}">
                                                    <x-feathericon-phone-call class="gtm-phone" />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn  btn-rounded btn-gradient-primary " href="javascript:void(0)"  onclick="$('#form-modal').modal('show')">
                                                    <x-feathericon-mail/>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="feature-box-info pl-0">
                                            <p class="pb-0 text-uppercase text-color-dark line-height-1 text-2">{{ __('header.call-us') }}</p>
                                            <a href="tel:{{ $data['phoneLink'] }}">
                                                <p class="pb-0 text2 text-uppercase text-color-dark font-weight-black letter-spacing-minus-1 line-height-1 text-5 gtm-phone">
                                                    {{ $data['phoneText'] }}
                                                </p>
                                            </a>
                                        </div>
                                        <div class="lang">
                                            <ul>
                                                @foreach($data['available_locales'] as $locale)
                                                    <li class="{{ $locale['locale'] == app()->getLocale() ? 'current-lang' : '' }}">
                                                        <a href="{{ $locale['locale'] == app()->getLocale() ? 'javascript:void(0)' : route(request()->route()->getName(), ['locale' => $locale['locale']]) }}">
                                                            <img src="{{ asset('img/global/lang/' . $locale['locale'] . '.png') }}" alt="">{{ $locale['name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Lucky Chance Disk -->
{{--<div class="left-btn-disc">
    <a href="javascript:void(0)" onclick="closeDSC()" class="closeButton" data-toggle="tooltip" data-original-title="Close">
        <svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>    </a>
    <a href="javascript:void(0)"  onclick="$('#form-modal').modal('show')"> <img src="{{ asset('img/landing/' . app()->getLocale() . '-dsc.png') }}" alt=""> </a>
</div>--}}
