<?php

namespace App\Http\Livewire;

use App\Jobs\SendMailJob;
use App\Models\AwardWinner;
use Illuminate\Support\Facades\Cookie;

class LuckySpin extends MainLivewire
{
    public $awards, $result;
    public $name, $dial, $phone;
    public $isValid, $isError, $completeSpin = false;

    public function rules()
    {
        return [
            'name'  => 'nullable',
            'phone' => 'required|min:8|max:20|phone:AUTO|regex:/^([0-9\s\-\+\(\)]*)$/',
        ];
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

        $this->awards = [
            ['key' => 1,  'value' => 50,   'text' => __("front.luckyspin.prices.50€discount"),    'background'=> '#000', 'color'=> '#fff'],
            ['key' => 2,  'value' => 75,   'text' => __("front.luckyspin.prices.75€discount"),    'background'=> '#111111', 'color'=> '#e8c100'],
            ['key' => 3,  'value' => 100,  'text' => __("front.luckyspin.prices.100€discount"),   'background'=> '#1c1c1c', 'color'=> '#fff'],
            ['key' => 4,  'value' => 0,    'text' => __("front.luckyspin.prices.125€discount"),   'background'=> '#222222', 'color'=> '#e8c100'],
            ['key' => 5,  'value' => 0,    'text' => __("front.luckyspin.prices.150€discount"),   'background'=> '#000', 'color'=> '#fff'],
            ['key' => 6,  'value' => 50,   'text' => __("front.luckyspin.prices.50%discount"),    'background'=> '#111111', 'color'=> '#e8c100'],
            ['key' => 7,  'value' => 2000, 'text' => __("front.luckyspin.prices.free"), 'background'=> '#1c1c1c', 'color'=> '#fff'],
            ['key' => 8,  'value' => 1000, 'text' => __("front.luckyspin.prices.no-profit"),      'background'=> '#222222', 'color'=> '#e8c100'],
            ['key' => 9,  'value' => 5,    'text' => __("front.luckyspin.prices.5%discount"),     'background'=> '#000', 'color'=> '#fff'],
            ['key' => 10, 'value' => 10,   'text' => __("front.luckyspin.prices.10%discount"),    'background'=> '#111111', 'color'=> '#e8c100'],
        ];
        //shuffle($this->awards);
        $this->awards = json_encode($this->awards, true);
    }

    public function selectAward()
    {
        /*<==| Asla Çıkmayacak Veriler Seçiliyor |==>*/
        $collect = collect(json_decode($this->awards))->where('value', '<>', 0)->toArray();

        /*<==| Çıkabilecek Ödüller Karıştırılıyor |==>*/
        shuffle($collect);

        /*<==| Ödül Seçiliyor |==>*/
        $award = current($collect);
        $this->result = collect($award)->toArray();

        $this->emit('runLuckyWheel', $award);
        return $award;
    }

    public function checkVisitorWinAnyAward()
    {
        $awards = AwardWinner::where('phone', str_replace(' ', '', $this->phone))->get();
        if ($awards->count() > 0) {
            $errors = $this->getErrorBag();
            $errors->add('award', __('front.form.already-used'));

            Cookie::forever(config('lucky-spin.cookie_name'), $awards->first()->cookie);
            return false;
        }

        return true;
    }

    public function sendForm()
    {
        $this->validate();
        if ($this->checkVisitorWinAnyAward() == false && config('app.env') != 'local') {
            return false;
        }

        $award = $this->selectAward();

        /*<==| Mail Notifications Send |==>*/
        $mailData = [
            'receivers' => $this->data['receivers'],
            'service'   => $this->data['service'],
            'hostName'  => $this->data['hostName'],
            'api_information' => $this->data['api_information'],
            'data' => [
                'name'  => $this->name,
                'phone' => $this->phone,
                'award' => $award->text,

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
            /*<==| Ödül Alana Cookie Oluşturacak |==>*/
            $cookieData = [
                'name'         => $this->name,
                'phone'        => str_replace(' ', '', $this->phone),
                'ip'           => $this->data['ip'],
                'country'      => $this->data['userLocale'],
                'country_name' => $this->data['userCountry'],
                'award'        => $award->text,
                'cookie'       => time()
            ];
            AwardWinner::create($cookieData);
            Cookie::forever(config('lucky-spin.cookie_name'), $cookieData['cookie']);

            $this->isValid = true;
        }
    }

    public function refreshForm()
    {
        $this->name    = null;
        $this->isValid = false;
        $this->isError = false;
        $this->phone   = $this->dial;
    }

    public function render()
    {
        return view('livewire.lucky-spin');
    }
}
