@if(config('app.env'))
    <!-- Exit Intent Modal -->
    <div class="modal exitIntentModal" id="exitIntentModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exitIntentModal">{{ __('partials.exit-intent-modal.title') }}</h4>
                    <button type="button" class="open btn btn-outline btn-secondary" aria-hidden="true" onclick="closeModal('.exitIntentModal')">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container teeth-container">
                        <small>{{ __('partials.form-modal.description') }}</small>
                        <div class="divider divider-style-4 taller appear-animation animated bounceIn appear-animation-visible mt-3 mb-3 divider-icon-sm"
                             data-appear-animation="bounceIn"
                             data-appear-animation-delay="300"
                             style="animation-delay: 300ms;">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @livewire('simple-form', ['formPosition' => 'Exit Intent', 'data' => $data])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Form Modal -->
<div class="modal form-modal" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="form-modal">{{ __('partials.form-modal.title') }}</h4>
                <button type="button" class="open btn btn-outline-danger" aria-hidden="true" onclick="closeModal('.form-modal')">&times;</button>
            </div>
            <div class="modal-body">
                {{--<div class="col-12 order-1 order-lg-2">
                    <img src="{{ asset('img/yılbaşı-indirimi.gif') }}" alt="New Year Discount" style="width: inherit">
                </div>--}}
                <small>{{ __('partials.form-modal.description') }}</small>
                <div class="divider divider-style-4 taller appear-animation animated bounceIn appear-animation-visible mt-3 mb-3 divider-icon-sm"
                     data-appear-animation="bounceIn"
                     data-appear-animation-delay="300"
                     style="animation-delay: 300ms;">
                    <i class="fas fa-chevron-down"></i>
                </div>
                @livewire('simple-form', ['formPosition' => 'Modal Form', 'data' => $data])
            </div>
        </div>
    </div>
</div>

{{--@if(config('lucky-spin.isActive'))
    <!-- Lucky Spin -->
    <div class="wheel-overlay" style="opacity: 0; display: none" wire:ignore></div>

    <div class="wheel_content" wire:ignore.self style="display: none">
        @livewire('lucky-spin', ['formPosition' => 'Lucky Spin', 'data' => $data])
        <div class="wheel-close wheel-toggle">
            <span>
                <x-feathericon-x />
            </span>
        </div>
    </div>

    <div class="wheel-toggle small-spin" style="position: fixed; right: -50px; bottom: 60px; z-index: 999;cursor: pointer" wire:ignore>
        <img src="{{ asset('plugins/super-wheel/small-spin.png') }}" width="50px" alt="{{ __('partials.spin-show-hide') }}">
    </div>

    <div class="small-spin-title" style="right: -400px;" onclick="showWheel(1000)"><p>{{ __('partials.try-chance') }}</p></div>
@endif--}}



