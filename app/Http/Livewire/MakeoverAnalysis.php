<?php

namespace App\Http\Livewire;

use App\Jobs\SendMailJob;
use App\Traits\Helper;

class MakeoverAnalysis extends MainLivewire
{
    use Helper;

    public $body_areas = [];
    public $selected_areas = [], $age = 25, $is_pregnant, $name, $dial, $phone, $fields;
    public $activeStep = 1, $totalStep = 5;
    public $isValid, $isError;

    public function rules()
    {
        $rules = [
            'name'  => 'nullable',
            'phone' => 'required|min:8',
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
        ];
    }

    public function mount($formPosition, $data)
    {
        $this->syncValues($formPosition, $data);

        $this->phone = $data['dial'];
        $this->dial  = $data['dial'];

        $this->fields = [
            'is_pregnant'
        ];

        ## Dent Types Load
        $this->body_areas = [
            'breast', 'abdominal', 'arm', 'leg', 'butt', 'back'
        ];
    }

    public function action($type)
    {
        if ($type == 'prev') {
            if ($this->activeStep != 1) {
                $this->activeStep -= 1;
            }
        } elseif ($type == 'next') {
            if ($this->activeStep != $this->totalStep) {
                $this->activeStep += 1;
            }
        }
    }

    public function updated($field)
    {
        if (in_array($field, $this->fields)) {
            $this->activeStep++;
        }
    }

    public function selectArea($area)
    {
        if (in_array($area, $this->selected_areas)) {
            unset($this->selected_areas[$this->getArrayKey(null, $this->selected_areas, $area)]);
        } else {
            array_push($this->selected_areas, $area);
        }
    }

    public function updatedAge()
    {
        $this->emit('updateAgeRange');
    }

    public function sendForm()
    {
        $this->validate();

        /*<==| Mail Notifications Send |==>*/
        $mailData = [
            'receivers' => $this->data['receivers'],
            'service'   => $this->data['service'],
            'hostName'  => $this->data['hostName'],
            'api_information' => $this->data['api_information'],
            'data' => [
                'name'        => $this->name,
                'phone'       => $this->phone,
                'areas'       => $this->selected_areas,
                'age'         => $this->age,
                'is_pregnant' => $this->is_pregnant,

                'formPosition' => $this->data['formPosition'],
                'adPlatform'   => $this->data['adPlatform'],
                'campaign_type' => $this->data['campaign_type'],
                'adLocale'     => $this->data['adLocale'],
                'userCountry'  => $this->data['userCountry'],
            ],
        ];
        try {
            SendMailJob::dispatch($mailData);
        } catch (\Exception $exception) {
            $this->isError = true;
            \Log::error($exception->getMessage());
        }

        if ($this->isError == false) {
            $this->activeStep++;
            $this->isValid = true;
        }
    }

    public function refreshForm()
    {
        $this->isValid    = false;
        $this->isError    = false;
        $this->activeStep = 1;

        $this->name   = null;
        $this->phone  = $this->dial;
        $this->selected_areas = [];
        $this->age = 25;
        $this->is_pregnant = null;
    }

    public function render()
    {
        return view('livewire.makeover-analysis');
    }
}
