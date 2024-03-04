<?php

namespace App\Listeners;

use App\Mail\forgotPassKey;
use App\Models\User;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Mail;
class forgotPasswordListner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
       
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        //ddd($event->sendEmail['token']);
        //$admin = User::find($event->sendEmail['emailTo']);
        //ddd($event->company);
        $linkToken = $event->sendEmail['token'];
        $userName = $event->sendEmail['userName'];
        $email = $event->sendEmail['emailTo'];
        Mail::to($email)->send(new forgotPassKey($linkToken,$userName));
        toastr()->addSuccess(" Mail Send Success");
    }
}
