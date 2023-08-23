<?php

namespace App\Jobs;

use App\Mail\SendContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function handle()
    {
        if (config('app.env') == 'local') {
            $this->details['receivers'] = ['mail@mezbilisim.com'];
        }

        $mailTemplate = new SendContactMail($this->details);
        Mail::to($this->details['receivers'])->send($mailTemplate);
    }
}
