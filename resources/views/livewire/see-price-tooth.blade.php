<div>
    <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
            @if($isValid)
                <img
                    data-appear-animation="fadeInRightShorter"
                    data-appear-animation-duration="750"
                    src="{{ asset('img/landing/tooth/tooth-slider.jpg') }}"
                    style="width: inherit"
                    alt="See Price">
            @else
                <img
                    data-appear-animation="fadeInRightShorter"
                    data-appear-animation-duration="750"
                    src="{{ asset('img/landing/tooth/tooth-slider.jpg') }}"
                    style="width: inherit"
                    alt="See Price">
            @endif
        </div>
        <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column align-self-center mt-2">
            <h2 class="bf-h2 font-weight-bold text-9 mb-0 appear-animation animated appear-animation-visible"
                data-appear-animation="fadeInUpShorter"
                data-appear-animation-duration="750">
                @if($isValid)
                    {{ $technic }} Preis
                @else
                    Siehe Preis
                @endif
            </h2>
            <p class="pt-3"
               data-appear-animation="fadeInUpShorter"
               data-appear-animation-delay="450"
               data-appear-animation-duration="750">
                @if($isValid)
                    Der von Ihnen gewählte Service kostet <span class="font-weight-bolder text-5 text-color-black">
                        @switch($technic)
                            @case('Zirkonbeschichtung')
                                €450.
                                @break

                            @case('Laminiert')
                                €650.
                                @break

                            @case('Implantieren')
                                €400.
                                @break

                            @case('Implantatoberteil Zirkon')
                                €190.
                                @break

                            @case('Sinuslifting')
                                €500.
                                @break

                            @default
                                -
                        @endswitch
                    </span>
                    Unser Patientenberater wird sich schnellstmöglich mit Ihnen in Verbindung setzen und Ihnen nähere Auskünfte geben.
                @else
                    Um die Preisinformationen anzuzeigen, müssen Sie Ihre persönlichen Daten eingeben und den gewünschten Service auswählen.
                    Diese Informationen werden nicht an Dritte oder Unternehmen weitergegeben.
                @endif
            </p>
            @if($isValid)
                <div class="row">
                    <div class="col-12">
                        <div class="results text-center">
                            <button type="button" class="btn btn-primary">{{ __('front.form.done') }}</button>
                        </div>
                    </div>
                </div>
            @else
                <div class="card mb-4"
                     data-appear-animation="fadeInUpShorter"
                     data-appear-animation-delay="850"
                     data-appear-animation-duration="750">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12">
                                <form class="contact-form form-style-3" wire:submit.prevent="sendForm">
                                    @if($isValid == true)
                                        <div class="contact-form-success alert alert-success mt-4">
                                            <strong>{{ __('front.form.success') }}</strong> {{ __('front.form.success.message') }}
                                        </div>
                                    @endif

                                    @if($isError == true)
                                        <div class="contact-form-error alert alert-danger mt-4">
                                            <strong>{{ __('front.form.error') }}</strong> {{ __('front.form.error.message') }}
                                            <span class="mail-error-message text-1 d-block"></span>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="mb-1 text-2" for="name">{{ __('front.form.full-name') }}</label>
                                            <input type="text" wire:model="name" class="form-control text-3 h-auto py-2 pl-2 @error('name') error @enderror" aria-label="name" placeholder="ex; Jane Doe">
                                            @error('name')<label class="error" for="name">{{ $message }}</label>@enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="mb-1 text-2">{{ __('front.form.phone-number') }}*</label>
                                            <div wire:ignore wire:key="phoneNumber">
                                                <input type="tel" wire:model="phone" class="form-control phone text-3 h-auto py-2 @error('phone') error @enderror" aria-label="phone">
                                            </div>
                                            @error('phone')<label class="error" for="name">{{ $message }}</label>@enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="custom-control custom-radio ml-3">
                                            <input type="radio" id="radio-1" wire:model="technic" value="Zirkonbeschichtung" class="custom-control-input">
                                            <label class="custom-control-label" for="radio-1">Zirkonbeschichtung</label>
                                        </div>
                                        <div class="custom-control custom-radio ml-3">
                                            <input type="radio" id="radio-2" wire:model="technic" value="Laminiert" class="custom-control-input">
                                            <label class="custom-control-label" for="radio-2">Laminiert</label>
                                        </div>
                                        <div class="custom-control custom-radio ml-3">
                                            <input type="radio" id="radio-3" wire:model="technic" value="Implantieren" class="custom-control-input">
                                            <label class="custom-control-label" for="radio-3">Implantieren</label>
                                        </div>
                                        <div class="custom-control custom-radio ml-3">
                                            <input type="radio" id="radio-4" wire:model="technic" value="Implantatoberteil Zirkon" class="custom-control-input">
                                            <label class="custom-control-label" for="radio-4">Implantatoberteil Zirkon</label>
                                        </div>
                                        <div class="custom-control custom-radio ml-3">
                                            <input type="radio" id="radio-5" wire:model="technic" value="Sinuslifting" class="custom-control-input">
                                            <label class="custom-control-label" for="radio-5">Sinuslifting</label>
                                        </div>
                                        <div class="col-12">
                                            @error('technic')<label class="error">{{ $message }}</label>@enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12 m-0">
                                            <button type="submit" class="btn btn-success" wire:loading.delay.attr="disabled">
                                                <span wire:loading.delay.remove>{{ __('front.form.see-price-now') }}</span>
                                                <span wire:loading.delay>{{ __('front.form.sending') }}</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="results">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
