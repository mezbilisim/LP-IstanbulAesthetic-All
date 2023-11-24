<?php

namespace App\Http\Livewire;

use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Log;

class SimpleForm extends MainLivewire
{
    public $name, $dial, $phone, $email, $hours = '10:00-12:00', $communication = 'WhatsApp';
    public $isValid, $isError;

    public function rules()
    {
        $rules = [
            'name'  => 'nullable',
            'phone' => 'required|min:8',
            'communication' =>  'required'
            # 'email' => 'nullable|email'
            # 'hours' => 'nullable',
        ];

        if ($this->data['campaign_type'] === $this->data['force_validate_campaign_type']) {
            $rules['phone'] = 'required|min:8|phone:AUTO|regex:/^([0-9\s\-\+\(\)]*)$/';
        }

        return $rules;
    }

    public function getValidationAttributes()
    {
        return [
            'name' => __('front.form.name'),
            'phone' => __('front.form.phone-number'),
            'communication' =>  'required'
         #   'email' => 'Email'
            #  'hours' => __('front.form.form.hours'),
        ];
    }

    public function mount($formPosition, $data)
    {
        $this->syncValues($formPosition, $data);

        $this->phone = $data['dial'];
        $this->dial  = $data['dial'];
    }

    public function sendForm()
    {

        Log::info(print_r([
            'name'  => $this->name,
            'phone' => $this->phone,
           // 'ip'                => request()->ip(),
            'formPosition' => $this->data['formPosition'],
            'adPlatform'   => $this->data['adPlatform'],
            'adLocale'     => $this->data['adLocale'],
            'userCountry'  => $this->data['userCountry'],
        ], true));

        $this->validate();

        /*<==| Mail Notifications Send |==>*/
        $mailData = [
            'receivers' => $this->data['receivers'],
            'service'   => $this->data['service'],
            'hostName'  => $this->data['hostName'],
            'api_information' => $this->data['api_information'],
            'data' => [
                'name'  => $this->name,
                'phone' => $this->phone,
                'communication' => $this->communication,
                #        'email' => $this->email,
                #       'hours' => $this->hours,

                'formPosition'  => $this->data['formPosition'],
                'adPlatform'    => $this->data['adPlatform'],
                'campaign_type' => $this->data['campaign_type'],
                'adLocale'      => $this->data['adLocale'],
                'userCountry'   => $this->data['userCountry'],
            ],
        ];

        try {
            SendMailJob::dispatch($mailData);
        } catch (\Exception $exception) {
            $this->isError = true;
            \Log::error($exception->getMessage());
        }

        if ($this->isError == false) {
            $this->refreshForm();
            $this->isValid = true;
        }
    }

    public function refreshForm()
    {
        $this->isValid = false;
        $this->isError = false;

        $this->name  = null;
        $this->phone = $this->dial;
        #  $this->hours = '10:00-12:00';
    }

    public function render()
    {
        return view('livewire.simple-form');
    }
}
