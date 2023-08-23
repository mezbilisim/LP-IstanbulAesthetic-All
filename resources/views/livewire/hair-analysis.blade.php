<div>
    <div class="card card-background-image-hover border-0 {{ $data['formPosition'] == 'Exit Intent' ? 'm-0' : '' }}">
        <div class="card-body p-3">
            <div class="row ">
                <div class="{{ $data['formPosition'] == 'Exit Intent' ? 'order-1 mt-4' : 'col-lg-5' }} col-12">
                    <img class=" image-boxes-img  h-100" style="object-fit: cover" src="{{ asset('img/landing/' . $data['landing_slug'] . '/hair-analysis-img.jpg') }}" alt="">
                </div>
                <div class="{{ $data['formPosition'] == 'Exit Intent' ? 'mt-0' : 'col-lg-7' }} col-12">
                    <div class="content-block">
                        <div class="analysis-header  mb-4">
                            <h2 class="card-title mt-2 mb-3 text-7 font-weight-bold"> {{ __('front.hairAnalysis.title') }} </h2>
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar progress-bar-success"
                                     role="progressbar"
                                     aria-valuenow="{{ $activeStep }}"
                                     aria-valuemin="1"
                                     aria-valuemax="{{ $totalStep }}"
                                     style="width: {{ 100 /$totalStep * $activeStep }}%;"></div>
                            </div>
                        </div>

                        <div class="analysis-body mb-2">
                            <div class="analysis-tabs">
                                <!-- Gender -->
                                <div class="analysis-tab-1 {{ $activeStep != 1 ? 'd-none' : '' }}">
                                    <h4 class="font-weight-bold ">{{ __('front.hairAnalysis.head1') }}</h4>
                                    <div class="row">
                                        <div class="col-6 flex-column  mb-4">
                                            <div class="gender-box align-items-center {{ $gender == __('front.form.gender.men') ? 'analysis-active' : '' }}"
                                                 wire:click="$set('gender', '{{ __('front.form.gender.men') }}')">
                                                <img class="img-fluid  analysis-img-shadow p-2 cur-pointer"
                                                     alt=""
                                                     src="{{ asset('img/global/hair-analysis/male.svg') }}">
                                                <strong class="text-dark">{{ __('front.form.gender.men') }}</strong>
                                            </div>
                                        </div>
                                        <div class="col-6 flex-column mb-4 ">
                                            <div class="gender-box align-items-center {{ $gender == __('front.form.gender.women') ? 'analysis-active' : '' }}"
                                                 wire:click="$set('gender', '{{ __('front.form.gender.women') }}')">
                                                <img class="img-fluid  analysis-img-shadow p-2 cur-pointer "
                                                     alt=""
                                                     src="{{ asset('img/global/hair-analysis/female.svg') }}">
                                                <strong class="text-dark">{{ __('front.form.gender.women') }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hair Type -->
                                <div class="analysis-tab-2 {{ $activeStep != 2 ? 'd-none' : '' }}">
                                    <h4 class="font-weight-bold ">{{ __('front.hairAnalysis.head2') }}</h4>
                                    <div class="row process-model">
                                        @if($gender == __('front.form.gender.women'))
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.women.type1') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.women.type1') }}')"
                                                         src="{{ asset('img/global/hair-analysis/stage-1.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.women.type1') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.women.type2') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.women.type2') }}')"
                                                         src="{{ asset('img/global/hair-analysis/stage-2.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.women.type2') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.women.type3') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.women.type3') }}')"
                                                         src="{{ asset('img/global/hair-analysis/stage-3.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.women.type3') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.women.type4') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.women.type4') }}')"
                                                         src="{{ asset('img/global/hair-analysis/stage-4.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.women.type4') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.women.type5') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.women.type5') }}')"
                                                         src="{{ asset('img/global/hair-analysis/frontal.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.women.type5') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.women.type6') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.women.type6') }}')"
                                                         src="{{ asset('img/global/hair-analysis/advanced.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.women.type6') }}</strong>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.men.type1') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.men.type1') }}')"
                                                         src="{{ asset('img/global/hair-analysis/norwoodType-1.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.men.type1') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.men.type2') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.men.type2') }}')"
                                                         src="{{ asset('img/global/hair-analysis/norwoodType-2.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.men.type2') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.men.type3') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.men.type3') }}')"
                                                         src="{{ asset('img/global/hair-analysis/norwoodType-3.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.men.type3') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.men.type4') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.men.type4') }}')"
                                                         src="{{ asset('img/global/hair-analysis/norwoodType-4.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.men.type4') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.men.type5') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.men.type5') }}')"
                                                         src="{{ asset('img/global/hair-analysis/norwoodType-5.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.men.type5') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.men.type6') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.men.type6') }}')"
                                                         src="{{ asset('img/global/hair-analysis/norwoodType-6.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.men.type6') }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 flex-column mb-4">
                                                <div>
                                                    <img class="img-fluid analysis-img-shadow cur-pointer {{ $hairType == __('front.hairType.men.type7') ? 'analysis-active' : '' }}"
                                                         wire:click="$set('hairType', '{{ __('front.hairType.men.type7') }}')"
                                                         src="{{ asset('img/global/hair-analysis/norwoodType-7.svg') }}" alt="">
                                                    <strong class="text-dark text-2">{{ __('front.hairType.men.type7') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Hair Files -->
                                <div class="analysis-tab-3 {{ $activeStep != 3 ? 'd-none' : '' }}">
                                    <h4 class="font-weight-bold ">{{ __('front.hairAnalysis.head3') }}</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-4 mb-4">
                                            <div class="logo-preview position-relative mr-2 h-100">
                                                <h4 class="font-weight-bold ">Front</h4>
                                                @if(/*isset($files['company-information_logo']) && is_array($files['company-information_logo'])*/false)
                                                    <div class="avatar avatar-sm border d-flex align-items-center p-2" style="height: calc(100% - 40px); border-radius: .25rem">
                                                        <img src="{{ asset($files['company-information_logo'] ? 'storage/' . $files['company-information_logo']['data']['url'] : 'assets/img/90x90.jpg') }}" class="img-fluid rounded" alt="Logo"/>
                                                    </div>
                                                    <div class="d-flex mt-2 flex-column">
                                                        <button type="button" class="btn btn-danger d-flex justify-content-center align-items-center" wire:click="$set('files.company-information_logo', null)"><x-feathericon-trash-2 class="mr-2" /> Temizle</button>
                                                    </div>
                                                @else
                                                    <div class="logo-upload " style="min-height: 60px">
                                                        <div
                                                            wire:ignore
                                                            x-data
                                                            x-init="() => {
                                                                var myPond = FilePond.create($refs.input);
                                                                myPond.setOptions({
                                                                    allowMultiple: false,
                                                                    server: {
                                                                        process:(files, file, metadata, load, error, progress, abort, transfer, options) => {
                                                                            @this.upload('files.front', file, load, error, progress, abort, transfer, options)
                                                                        },
                                                                        revert: (filename, load) => {
                                                                            @this.removeUpload('files.front', filename, load)
                                                                        },
                                                                    },
                                                                    allowImagePreview: true,
                                                                    imagePreviewMaxHeight: '256',
                                                                    allowFileTypeValidation: true
                                                                });
                                                                this.addEventListener('pondReset', e => {
                                                                    myPond.removeFiles();
                                                                });
                                                            }" class="">
                                                            <input type="file" x-ref="input" />
                                                        </div>
                                                        @error('files.front')<label class="error" for="name">{{ $message }}</label>@enderror
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 mb-4">
                                            <div class="logo-preview position-relative mr-2 ">
                                                <h4 class="font-weight-bold ">Back</h4>
                                                @if(/*isset($files['company-information_logo']) && is_array($files['company-information_logo'])*/false)
                                                    <div class="avatar avatar-sm border d-flex align-items-center p-2" style="height: calc(100% - 40px); border-radius: .25rem">
                                                        <img src="{{ asset($files['company-information_logo'] ? 'storage/' . $files['company-information_logo']['data']['url'] : 'assets/img/90x90.jpg') }}" class="img-fluid rounded" alt="Logo"/>
                                                    </div>
                                                    <div class="d-flex mt-2 flex-column">
                                                        <button type="button" class="btn btn-danger d-flex justify-content-center align-items-center" wire:click="$set('files.company-information_logo', null)"><x-feathericon-trash-2 class="mr-2" /> Temizle</button>
                                                    </div>
                                                @else
                                                    <div class="logo-upload " style="min-height: 50px">
                                                        <div
                                                            wire:ignore
                                                            x-data
                                                            x-init="() => {
                                                                var myPond = FilePond.create($refs.input);
                                                                myPond.setOptions({
                                                                    allowMultiple: false,
                                                                    server: {
                                                                        process:(files, file, metadata, load, error, progress, abort, transfer, options) => {
                                                                            @this.upload('files.back', file, load, error, progress, abort, transfer, options)
                                                                        },
                                                                        revert: (filename, load) => {
                                                                            @this.removeUpload('files.back', filename, load)
                                                                        },
                                                                    },
                                                                    allowImagePreview: true,
                                                                    imagePreviewMaxHeight: '256',
                                                                    allowFileTypeValidation: true
                                                                });
                                                                this.addEventListener('pondReset', e => {
                                                                    myPond.removeFiles();
                                                                });
                                                            }" class="">
                                                            <input type="file" x-ref="input" />
                                                        </div>
                                                        @error('files.back')<label class="error" for="name">{{ $message }}</label>@enderror
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 mb-4">
                                            <div class="logo-preview position-relative mr-2">
                                                <h4 class="font-weight-bold ">Side</h4>
                                                @if(/*isset($files['company-information_logo']) && is_array($files['company-information_logo'])*/false)
                                                    <div class="avatar avatar-sm border d-flex align-items-center p-2" style="height: calc(100% - 40px); border-radius: .25rem">
                                                        <img src="{{ asset($files['company-information_logo'] ? 'storage/' . $files['company-information_logo']['data']['url'] : 'assets/img/90x90.jpg') }}" class="img-fluid rounded" alt="Logo"/>
                                                    </div>
                                                    <div class="d-flex mt-2 flex-column">
                                                        <button type="button" class="btn btn-danger d-flex justify-content-center align-items-center" wire:click="$set('files.company-information_logo', null)"><x-feathericon-trash-2 class="mr-2" /> Temizle</button>
                                                    </div>
                                                @else
                                                    <div class="logo-upload h-100" style="min-height: 50px">
                                                        <div
                                                            wire:ignore
                                                            x-data
                                                            x-init="() => {
                                                                var myPond = FilePond.create($refs.input);
                                                                myPond.setOptions({
                                                                    allowMultiple: false,
                                                                    server: {
                                                                        process:(files, file, metadata, load, error, progress, abort, transfer, options) => {
                                                                            @this.upload('files.side', file, load, error, progress, abort, transfer, options)
                                                                        },
                                                                        revert: (filename, load) => {
                                                                            @this.removeUpload('files.side', filename, load)
                                                                        },
                                                                    },
                                                                    allowImagePreview: true,
                                                                    imagePreviewMaxHeight: '256',
                                                                    allowFileTypeValidation: true
                                                                });
                                                                this.addEventListener('pondReset', e => {
                                                                    myPond.removeFiles();
                                                                });
                                                            }" class="h-100">
                                                            <input type="file" x-ref="input" />
                                                        </div>
                                                        @error('files.side')<label class="error" for="name">{{ $message }}</label>@enderror
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Treatment Time -->
                                <div class="analysis-tab-4 {{ $activeStep != 4 ? 'd-none' : '' }}">
                                    <h4 class="font-weight-bold ">{{ __('front.hairAnalysis.head4') }}</h4>
                                    <div class="row justify-content-center treatment-time">
                                        <div class="col-6 flex-column  mb-4">
                                            <a href="javascript:void(0)" class="treatment-btn btn btn-{{ $treatmentTime == __('front.hairAnalysis.treatment.time1') }} m-2"
                                               wire:click="$set('treatmentTime', '{{ __('front.hairAnalysis.treatment.time1') }}')">
                                                {{ __('front.hairAnalysis.treatment.time1') }}
                                            </a>
                                        </div>
                                        <div class="col-6 flex-column  mb-4">
                                            <a href="javascript:void(0)" class="treatment-btn btn btn-{{ $treatmentTime == __('front.hairAnalysis.treatment.time2') }} m-2"
                                               wire:click="$set('treatmentTime', '{{ __('front.hairAnalysis.treatment.time2') }}')">
                                                {{ __('front.hairAnalysis.treatment.time2') }}
                                            </a>
                                        </div>
                                        <div class="col-6 flex-column  mb-4">
                                            <a href="javascript:void(0)" class="treatment-btn btn btn-{{ $treatmentTime == __('front.hairAnalysis.treatment.time3') }} m-2"
                                               wire:click="$set('treatmentTime', '{{ __('front.hairAnalysis.treatment.time3') }}')">
                                                {{ __('front.hairAnalysis.treatment.time3') }}
                                            </a>
                                        </div>
                                        <div class="col-6 flex-column  mb-4">
                                            <a href="javascript:void(0)" class="treatment-btn btn btn-{{ $treatmentTime == __('front.hairAnalysis.treatment.time4') }} m-2"
                                               wire:click="$set('treatmentTime', '{{ __('front.hairAnalysis.treatment.time4') }}')">
                                                {{ __('front.hairAnalysis.treatment.time4') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- User Info Form -->
                                <div class="analysis-tab-5 {{ $activeStep != 5 ? 'd-none' : '' }}">
                                    <h4 class="text-center">{{ __('front.hairAnalysis.head5') }}</h4>
                                    <p class="form-text11">Bei sofort Buchungen erhalten Sie 10% Rabatt</p>
                                    <div class="row">
                                        <div class="form-group col-lg-12 featured-box-text-left">
                                            <label class="mb-1 text-2" for="name">{{ __('front.form.full-name') }}</label>
                                            <input type="text" wire:model.lazy="name" class="form-control text-3 h-auto py-2 pl-2 @error('name') error @enderror" aria-label="name" placeholder="">
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

                                <!-- Alerts -->
                                <div class="analysis-tab-6 {{ $activeStep != 6 ? 'd-none' : '' }}">
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

                        <div class="analysis-footer">
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

@push('livewireStyle')
    @once
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    @endonce
    <style type="text/css">
        .filepond--root {
            height: 100%!important;
        }
        /* the text color of the drop label*/
        .filepond--drop-label {
            display: flex;
            align-items: center;
            height: 100%;
        }
        .logo-upload {
            width: 100%;
        }
        .filepond--root .filepond--credits {
            display: none!important;
        }
    </style>
@endpush

@push('livewireScript')
    @once
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    @endonce

    <script type="text/javascript">

        document.addEventListener('livewire:load', function (event) {
            /* <=====// Filepond Initialize \\=====> */
            FilePond.registerPlugin(FilePondPluginImagePreview);
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            FilePond.registerPlugin(FilePondPluginFileValidateSize);

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
        })
    </script>
@endpush
