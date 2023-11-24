<?php

namespace App\Http\Livewire;

use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;

class HairAnalysis extends MainLivewire
{
    use WithFileUploads;

    public $gender, $hairType, $treatmentTime, $name, $dial, $phone, $files = [], $fields;
    public $activeStep = 1, $totalStep = 6;
    public $isValid, $isError;

    public function rules()
    {
        return [
            'name'  => 'required',
            'phone' => 'required|min:8',
            'files.*' => 'nullable|image|max:2048'
        ];
    }

    public function getValidationAttributes()
    {
        return [
            'name' => __('front.form.name'),
            'phone' => __('front.form.phone-number'),
            'files.*' => 'File'
        ];
    }

    public function mount($formPosition, $data)
    {
        $this->syncValues($formPosition, $data);

        $this->phone = $data['dial'];
        $this->dial  = $data['dial'];

        $this->fields = [
            'gender', 'hairType', 'treatmentTime'
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
        #dd('in here');
        /* <=====// Task Files Save \\=====> */
        $file_urls = [];
        if (!empty($this->files)) {
            foreach ($this->files as $file) {
                $file_name = $file->getClientOriginalName();

                $file_urls[] = 'files/hair_transplant_form/' . $file_name;
                $file->storeAs('files/hair_transplant_form', $file_name);
            }
        }

        /*<==| Mail Notifications Send |==>*/
        $mailData = [
            'receivers' => $this->data['receivers'],
            'service'   => $this->data['service'],
            'hostName'  => $this->data['hostName'],
            'api_information' => $this->data['api_information'],
            'data' => [
                'name'  => $this->name,
                'phone' => $this->phone,

                'gender'        => $this->gender,
                'hairType'      => $this->hairType,
                'treatmentTime' => $this->treatmentTime,

                'formPosition' => $this->data['formPosition'],
                'adPlatform'   => $this->data['adPlatform'],
                'adLocale'     => $this->data['adLocale'],
                'userCountry'  => $this->data['userCountry'],

                'file_urls' => $file_urls,
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

        $this->gender        = null;
        $this->name          = null;
        $this->phone         = $this->dial;
        $this->hairType      = null;
        $this->treatmentTime = null;
        $this->files         = [];
        $this->dispatchBrowserEvent('pondReset');
    }

    public function render()
    {
        return view('livewire.hair-analysis');
    }
}
