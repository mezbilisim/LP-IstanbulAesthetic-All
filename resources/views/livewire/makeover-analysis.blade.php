<div class="personal-teeth">
    <div class="card card-background-image-hover border-0">
        <div class="card-body p-3">
            <div class="row ">
                <div class="col-lg-5 col-12">
                    <img class=" image-boxes-img  h-100" style="    border: 1px solid #dfdfdf;    object-fit: cover;    border-radius: 3px;" src="{{ asset('img/global/mommy-makeover-analysis.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <div class="content-block">
                        <div class="analysis-header  mb-4">
                            <h2 class="card-title mt-2 mb-3 text-7 font-weight-bold"> {{ __('front.makeover-analysis.title') }} </h2>
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar progress-bar-success"
                                     role="progressbar"
                                     aria-valuenow="{{ $activeStep }}"
                                     aria-valuemin="1"
                                     aria-valuemax="{{ $totalStep }}"
                                     style="width: {{ 100 /$totalStep * $activeStep }}%;"></div>
                            </div>
                        </div>

                        <div class="analysis-body mb-5">
                            <div class="analysis-tabs">
                                <div class="analysis-tab-1 {{ $activeStep != 1 ? 'd-none' : '' }}">
                                    <h4 class="font-weight-bold ">{{ __('front.makeover-analysis.head1') }}</h4>
                                    <div class="row dental-models">
                                        @foreach($body_areas as $area_name)
                                            <div class="col-4 col-md-4 flex-column mb-4">
                                                <div class="d-flex flex-column">
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ in_array(__('front.body-area.' . $area_name), $selected_areas) ? 'analysis-active' : '' }}"
                                                         wire:click="selectArea('{{ __('front.body-area.' . $area_name) }}')"
                                                         src="{{ asset('img/global/body-area/as-'  . $area_name . '.jpg') }}"
                                                         alt="" style="height: auto!important;">
                                                    <strong class="text-dark text-2">{{ __('front.body-area.' . $area_name) }}</strong>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="analysis-tab-2 {{ $activeStep != 2 ? 'd-none' : '' }}">
                                    <h4 class="font-weight-bold ">{{ __('front.makeover-analysis.head2') }}</h4>
                                    <div class="row">
                                        <div id="bmr-calculator" class="wrapper">

                                            <div>
                                                <input type="radio" id="-18" name="drone" value="-18" wire:model.lazy="age">
                                                <label for="-18">{{ __('front.form.18-') }}</label>
                                            </div>

                                            <div>
                                                <input type="radio" id="18-30" name="drone" value="18-30" wire:model.lazy="age">
                                                <label for="18-30">18 - 30 </label>
                                            </div>

                                            <div>
                                                <input type="radio" id="30-45" name="drone" value="30-45" wire:model.lazy="age">
                                                <label for="30-45">30 - 45 </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="45-64" name="drone" value="45-64" wire:model.lazy="age">
                                                <label for="45-64">45 - 64</label>
                                            </div>

                                            <div>
                                                <input type="radio" id="64+" name="drone" value="64+" wire:model.lazy="age">
                                                <label for="64+">{{ __('front.form.64+') }}</label>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                    <div class="analysis-tab-3 {{ $activeStep != 3 ? 'd-none' : '' }}">
                                        <h4 class="font-weight-bold ">{{ __('front.makeover-analysis.head3') }}</h4>
                                        <div class="row">
                                            <div class="col-6 flex-column  mb-4">
                                                <div class="gender-box align-items-center {{ $is_pregnant == __('front.form.gender.men') ? 'analysis-active' : '' }}"
                                                     wire:click="$set('is_pregnant', '{{ __('front.yes') }}')">
                                                    <img class="img-fluid  analysis-img-shadow p-2 cur-pointer"
                                                         wire:click="$set('is_pregnant', '{{ __('front.yes') }}')"
                                                         alt=""
                                                         src="{{ asset('img/global/icon/check.svg') }}">
                                                    <strong class="text-dark">{{ __('front.yes') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-6 flex-column mb-4 ">
                                                <div class="gender-box align-items-center {{ $is_pregnant == __('front.form.gender.men') ? 'analysis-active' : '' }}"
                                                     wire:click="$set('is_pregnant', '{{ __('front.no') }}')">
                                                    <img class="img-fluid  analysis-img-shadow p-2 cur-pointer"
                                                         wire:click="$set('is_pregnant', '{{ __('front.no') }}')"
                                                         alt=""
                                                         src="{{ asset('img/global/icon/cross.svg') }}">
                                                    <strong class="text-dark">{{ __('front.no') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="analysis-tab-4 {{ $activeStep != 4 ? 'd-none' : '' }}">
                                        <h4 class="text-center">{{ __('front.makeover-analysis.head4') }}</h4>
                                        <div class="row">
                                            <div class="form-group col-lg-12 featured-box-text-left">
                                                <label class="mb-1 text-2" for="name">{{ __('front.form.full-name') }}</label>

                                                <input type="text" wire:model.lazy="name" class="form-control text-3 h-auto py-2 pl-2 @error('name') error @enderror" aria-label="name" placeholder="ex; Jane Doe">
                                                @error('name')<label class="error" for="name">{{ $message }}</label>@enderror

                                            </div>
                                            <div class="form-group col-lg-12 featured-box-text-left">
                                                <label class="mb-1 text-2">{{ __('front.form.phone-number') }}*</label>
                                                <div wire:ignore wire:key="phoneNumber">
                                                    <input type="tel" wire:model.lazy="phone" class="form-control phone text-3 h-auto py-2 @error('phone') error @enderror" aria-label="phone">
                                                </div>
                                                @error('phone')<label class="error" for="name">{{ $message }}</label>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="analysis-tab-5 {{ $activeStep != 5 ? 'd-none' : '' }}">
                                        <div class="row">
                                            @if($isValid == true)
                                                <div class="contact-form-success alert alert-success mt-4 featured-box-text-left">
                                                    <strong>{{ __('front.form.success') }}</strong> {{ __('front.form.success.message') }}
                                                </div>
                                            @endif

                                            @if($isError == true)
                                                <div class="contact-form-error alert alert-danger mt-4 featured-box-text-left">
                                                    <strong>{{ __('front.form.error') }}</strong> {{ __('front.form.error.message') }}
                                                    <span class="mail-error-message text-1 d-block"></span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="analysis-footer text-right">
                                @if($isValid != true)
                                    <button type="button" class="mb-2 mt-2 mr-1 btn btn-modern btn-outline btn-primary" wire:click="action('prev')"><x-feathericon-chevron-left style="width: 18px;height: 18px" /> {{ __('front.form.prev') }}</button>
                                @endif

                                @if($activeStep == $totalStep - 1)
                                    <button type="submit" class="btn btn-modern mb-2 mt-2 btn-primary" wire:click="sendForm" wire:loading.delay.attr="disabled">
                                        <span wire:loading.delay.remove>{{ __('front.form.submit-form') }} <x-feathericon-send style="width: 18px;height: 18px" /></span>
                                        <span wire:loading.delay>{{ __('front.form.sending') }} <x-feathericon-send style="width: 18px;height: 18px" /></span>
                                    </button>
                                @elseif($activeStep == $totalStep)
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-modern btn-primary" wire:click="refreshForm">{{ __('front.form.done') }} <x-feathericon-check-circle style="width: 18px;height: 18px" /></button>
                                @else
                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-modern btn-primary" wire:click="action('next')">{{ __('front.form.next') }} <x-feathericon-chevron-right style="width: 18px;height: 18px" /></button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('livewireScript')
        <script type="text/javascript">

            document.addEventListener('livewire:load', function (event) {
                /* <=====// Update Range Slider \\=====> */
                @this.on('updateAgeRange', function () {
                    $(".calculator input").on("input change", function (event) {
                        var parameterName =  $(this).attr("id").split("calc-")[1];

                        switch (parameterName) {
                            case "age":
                                $("#calc-age_value").html("Age: " + $(this).val());
                                break;
                        }
                    });
                })

                    /* <=====// Prev Step \\=====> */
                    @this.on('prev', function (data) {

                    });
            })
        </script>
@endpush
