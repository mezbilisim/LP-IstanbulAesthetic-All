<div>
    <div class="wheel-content-wrapper row justify-content-between">
        <div class="wheel-congratulations-effect" wire:ignore></div>

        <div class="col-md-6 col-12">
            <div class="super-wheel" wire:ignore></div>
        </div>

        <div class="col-md-5 col-12">
            <form class="form-icon contact-form form-with-icons" wire:submit.prevent="sendForm" wire:key="spin-form">


                @if($isError == true)
                    <div class="contact-form-error alert alert-danger mt-4">
                        <strong>{{ __('front.form.error') }}</strong> {{ __('front.form.error.message') }}
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                @endif

                @error('award')
                <div class="contact-form-error alert alert-danger mt-4">
                    <strong>{{ __('front.form.error') }}</strong> {{ $errors->first('award') }}
                    <span class="mail-error-message text-1 d-block"></span>
                </div>
                @enderror

                @if($completeSpin == false)
                    <div class="row">
                        <div class="col-12">
                            <h2 clas="bf-h2 font-weight-bold text-9 mb-0">
                                {{ __('front.luckyspin.title') }}
                            </h2>

                            <div class="spin-text">
                                <p> {{ __('front.luckyspin.list1') }} </p>
                                <p> {{ __('front.luckyspin.list2') }} </p>
                            </div>
                            <div class="form-group">
                                <label class="form-label mb-1 text-2">{{ __('front.form.full-name') }}</label>
                                <div class="position-relative">
                                    <i class="icons icon-user text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                    <input type="text" wire:model.lazy="name" class="form-control text-3 h-auto py-2 @error('name') error @enderror" aria-label="name" placeholder="ex; Jane Doe">
                                </div>
                                @error('name')<label class="error" for="name">{{ $message }}</label>@enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label mb-1 text-2">{{ __('front.form.phone-number') }}*</label>
                                <div wire:ignore wire:key="phoneNumber">
                                    <input type="tel" wire:model.lazy="phone" class="form-control phone text-3 h-auto py-2 @error('phone') error @enderror" aria-label="phone">
                                </div>
                                @error('phone')<label class="error" for="name">{{ $message }}</label>@enderror
                            </div>

                            <div class="form-group">
                                @if($isValid == false && $completeSpin == false)
                                    <button type="submit" class="btn btn-quaternary" wire:loading.delay.attr="disabled">
                                        <span wire:loading.delay.remove>{{ __('front.form.try-chance') }}</span>
                                        <span wire:loading.delay>{{ __('front.form.award-waiting') }}</span>
                                    </button>
                                @elseif($isValid == true && $completeSpin == false)
                                    <button type="button" class="btn btn-quaternary">
                                        <span>{{ __('front.form.award-waiting') }}</span>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

                @if($isValid == true && $completeSpin == true)
                    <div class="row results text-center">
                        <div class="col-12">
                            <h2 clas="bf-h2 font-weight-bold text-9 mb-0">
                                {{ __('front.luckyspin.congratulations') }}
                            </h2>
                            <div class="spin-text">
                                <p><span class="font-weight-bold text-3">{{ $result['text'] }}</span> {{ __('front.luckyspin.youwin') }}</p>
                                @if($isValid == true && $completeSpin == true)
                                    @if($result && $result['value'] !== 0)
                                        <div class="contact-form-success alert alert-success mt-4">
                                            {!! __('front.form.success.award.message', ['award' => '<strong>'. $result['text'] .'</strong>']) !!}
                                        </div>
                                    @else
                                        <div class="contact-form-success alert alert-warning mt-4">
                                            {{ __('front.form.success.award.empty.message') }}
                                        </div>
                                    @endif
                                @endif
                                <p>
                                    {{ __('front.luckyspin.userinf') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>

@push('livewireScript')

    <script type="text/javascript">
        document.addEventListener('livewire:load', function (event) {
            let awards = JSON.parse(@this.awards)
            /* <=====// Spin Yükleniyor \\=====> */
            var wheel = $('.super-wheel').superWheel({
                slices: awards,
                slice: {
                    background : "#333",// Default slice background color (works only if the slice is not colored in item object)
                    selected : {
                        background: '#f70707', // Animation background color
                        color:      "#333"  // Animation text color
                    }
                },
                marker: {
                    animate : true,
                    background: "#f70707",
                },
                selector: 'key',
                easing: 'superWheel',
                line: {
                    width: 0,
                    color: "white"
                },
                text: {
                    color: 'white',
                    size: 14,
                    offset: 8,
                    letterSpacing: 0,
                    orientation: 'v',
                    arc: false
                },
                outer: {
                    width: 6,
                    color: "#fff"
                },
                center: {
                    background:'white',
                    border:'2px solid red',
                    width: 10,
                    rotate: true
                },
                image:{
                    url: "/img/spin-bg-bottom.png",
                    width: 45
                },
            });

            /* <=====// Spine Noktalar Ekleniyor \\=====> */
            $(".sWheel-bg-layer svg").append(
                "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 200 200\" xml:space=\"preserve\" style=\"enable-background:new 0 0 200 200;\">" +
                "<circle class=\"outerLine2\"></circle></svg>"
            );

            @this.on('runLuckyWheel', (data) => {
                /* <=====// Spin Başlatılıyor \\=====> */
                $('.super-wheel').superWheel('start', 'key', data.key); //hileli
            })

            /* <=====// Spin Tamamlanıyor \\=====> */
            $('.super-wheel').superWheel('onComplete', function(results, spinCount, now) {
                @this.completeSpin = true;
                startCongratulationsEffect()
            });

            /*startCongratulationsEffect()*/
            function startCongratulationsEffect() {
                setTimeout(function() {
                    $('.wheel-congratulations-effect').fireworks();
                });
            }
        })


    </script>
@endpush
