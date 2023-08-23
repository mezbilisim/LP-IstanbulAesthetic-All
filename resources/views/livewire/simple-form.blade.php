<div>
    <h2 appear-animation
        animation-delay="100"
        data-appear-animation="fadeInUpShorter"
        data-appear-animation-duration="750"
        data-plugin-options="{'accY': -200}"
        class="font-weight-bold {{ $data['formPosition'] == 'Horizontal' ? '' : 'text-dark' }} text-6 mb-2 appear-animation animated fadeInUpShorter appear-animation-visible">
        {{ __('front.form.title') }}
    </h2>

    <form class="contact-form form-with-icons" wire:submit.prevent="sendForm">
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
            <div class="form-group align-self-end col-md-{{ $data['formPosition'] == 'Horizontal' ? '4' : '12' }} col-12">
                <label class="form-label mb-1 text-2 {{ $data['formPosition'] == 'Horizontal' ? 'text-light' : '' }}">{{ __('front.form.full-name') }}</label>
                <div class="position-relative">
                    <i class="icons icon-user text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                    <input type="text" wire:model.lazy="name" class="form-control text-3 h-auto py-2 @error('name') error @enderror" aria-label="name" placeholder="ex; Jane Doe">
                </div>
                @error('name')<label class="error" for="name">{{ $message }}</label>@enderror
            </div>
            <div class="form-group align-self-end col-md-{{ $data['formPosition'] == 'Horizontal' ? '4' : '12' }} col-12">
                <label class="form-label mb-1 text-2 {{ $data['formPosition'] == 'Horizontal' ? 'text-light' : '' }}">{{ __('front.form.phone-number') }}*</label>
                <div wire:ignore wire:key="phoneNumber">
                    <input type="tel" wire:model.lazy="phone" class="form-control phone text-3 h-auto py-2 @error('phone') error @enderror" aria-label="phone">
                </div>
                @error('phone')<label class="error" for="name">{{ $message }}</label>@enderror
            </div>
        <!--    <div class="form-group align-self-end col-md-{{ $data['formPosition'] == 'Horizontal' ? '4' : '12' }} col-12">
                <label class="form-label mb-1 text-2 {{ $data['formPosition'] == 'Horizontal' ? 'text-light' : '' }}">Email</label>
                <div class="position-relative">
                    <i class="icons icon-envelope text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                    <input type="text" wire:model.lazy="email" class="form-control text-3 h-auto py-2 @error('email') error @enderror" aria-label="email" placeholder="ex; jane_doe@gmail.com">
                </div>
                @error('email')<label class="error" for="name">{{ $message }}</label>@enderror
            </div> -->

        <!--    <div class="form-group col-md-{{ $data['formPosition'] == 'Horizontal' ? '4' : '12' }}">
                <label for="hours" class="form-label mb-1 text-2">{{ __('front.form.hours') }}*</label>
                <div class="position-relative">
                    <i class="icons icon-clock text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                       <select id="hours" wire:model="hours" class="form-control text-3 h-auto py-2 @error('hours') error @enderror">
                        <option value="10:00-12:00">10:00-12:00</option>
                        <option value="12:00-14:00">12:00-14:00</option>
                        <option value="18:00-20:00">18:00-20:00</option>
                    </select>

                </div>
                @error('hours')<label class="error" for="hours">{{ $message }}</label>@enderror
            </div> -->
            <div class="form-group col-md-{{ $data['formPosition'] == 'Horizontal' ? '4' : '12' }}">
                <label for="communication" class="form-label mb-1 text-2">{{ __('front.form.communication') }}*</label>
                <div class="position-relative">
                    <i class="icons icon-clock text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
                    <select id="communication" wire:model="communication" class="form-control text-3 h-auto py-2 @error('communication') error @enderror">
                        <option value="Phone">Phone</option>
                        <option value="WhatsApp">WhatsApp</option>
                    </select>

                </div>
                @error('communication')<label class="error" for="communication">{{ $communication }}</label>@enderror
            </div>

            <div class="form-group col-md-{{ $data['formPosition'] == 'Horizontal' ? '4' : '12' }} col-12 align-self-end desktop-wd">
                <button type="submit" class="btn btn-primary" wire:loading.delay.attr="disabled">
                    <span wire:loading.delay.remove>{{ __('front.form.submit-form') }}</span>
                    <span wire:loading.delay>{{ __('front.form.sending') }}</span>
                </button>
                @if($data['formPosition'] == 'Exit Intent')
                    <button type="button" class="btn btn-outline btn-secondary" onclick="closeModal('.exitIntentModal')">{{ __('front.form.close') }}</button>
                @elseif($data['formPosition'] == 'Modal Form')
                    <button type="button" class="btn btn-outline btn-secondary" onclick="closeModal('.form-modal')" >{{ __('front.form.close') }}</button>
                @endif
            </div>

        </div>
    </form>
</div>
