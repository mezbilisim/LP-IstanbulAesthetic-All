<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        ## Diğer Veriler Oluşturuluyor
        $other_details = null;
        foreach ($this->details['data'] as $key => $value) {
            if (!in_array($key, ['name', 'phone', 'email', 'file_urls'])) {
                if (is_array($value)) {
                    $other_details .= '<strong>' . $key . ': </strong>' . implode(', ', $value) . '</br>';
                } else {
                    $other_details .= '<strong>' . $key . ': </strong>' . $value . '</br>';
                }
            }
        }

        ## API ile CRM'e Kaydı Yapılıyor
        $response = Http::withToken($this->details['api_information']['token'] ?? null)
            ->accept('application/json')
            ->post($this->details['api_information']['url'], [
                'landing_id'    => $this->details['api_information']['landing_id'],
                'name'          => $this->details['data']['name'] ?? null,
                'phone'         => $this->details['data']['phone'] ?? null,
                'email'         => $this->details['data']['email'] ?? null,
                'communication' => $this->details['data']['communication'] ?? '',
                'other_details' => $other_details,
            ])
            ->json();

        ## Mail Dosyası Oluşturuluyor
        return $this->view('emails.contact-form')
            ->subject($this->details['data']['adLocale'] . ' | ' . $this->details['hostName'] .' | ' . $this->details['service'])
            ->with([
                'name'        => $this->details['data']['name'] ?? '',
                'phone'       => $this->details['data']['phone'] ?? '',
                'email'       => $this->details['data']['email'] ?? '',
                'age'         => $this->details['data']['age'] ?? '',
                'hours'       => $this->details['data']['hours'] ?? '',
                'gender'      => $this->details['data']['gender'] ?? '',
                'teethType'   => $this->details['data']['teethType'] ?? '',
                'areas'       => $this->details['data']['areas'] ?? '',
                'is_pregnant' => $this->details['data']['is_pregnant'] ?? '',
                'communication' => $this->details['data']['communication'] ?? '',

                'formPosition'  => $this->details['data']['formPosition'] ?? '',
                'adPlatform'    => $this->details['data']['adPlatform'] ?? '',
                'campaign_type' => $this->details['data']['campaign_type'] ?? '',
                'adLocale'      => $this->details['data']['adLocale'] ?? '',
                'award'         => $this->details['data']['award'] ?? '',
                'userCountry'   => $this->details['data']['userCountry'] ?? '',
            ]);
    }
}
