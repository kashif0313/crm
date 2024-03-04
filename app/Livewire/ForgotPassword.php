<?php

namespace App\Livewire;

use App\Events\forgotPasswordEvent;
use App\Models\User;
use Livewire\Attributes\Layout;
use Illuminate\Support\Str;

use Livewire\Component;

class ForgotPassword extends Component
{
    public $emailPassword;
    public function sendEmail()
    {   //$sendEmail = $this->emailPassword;
        $userID = User::where('email',$this->emailPassword)->first();
        $token = Str::random(10);
        //ddd($userID->id);
        $sendEmail = ['emailTo'=>$this->emailPassword,'userName'=>$userID->name,'token'=>$token];
        session(['resetPassToken' => $token]);
        session(['resetPassID' => $userID->id]);
        
        event(new forgotPasswordEvent($sendEmail));
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.forgot-password');
    }
}
