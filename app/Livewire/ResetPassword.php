<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ResetPassword extends Component
{
    public $resetToken;
    public $userID;
    #[Url]
    public $userToken;
    
    public $confirmResetPassword = false;
    public $retypePassword;
    public $Password;
    
    public function mount() //this function will run on first time component is initialized
    {
        $this->resetToken = session('resetPassToken'); //retriving the var from the session
        $this->userID = session('resetPassID'); 
        if($this->userID != null)
        {
             if($this->userToken == $this->resetToken)
            {
                $this->confirmResetPassword = true;
            }
        }
        
    
    }
    public function resetPassword()
    {
        //ddd($this->resetToken);
        if($this->confirmResetPassword == true)
        {
            if($this->Password == $this->retypePassword)
            {
                User::find($this->userID)->update([
                'password'=> Hash::make($this->Password),
            ]);
            toastr()->addSuccess('Password Updated Success .');
                return redirect('/roles');
            }
            toastr()->addWarning('Password Not Matched.');
            
        }
    }
    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.reset-password');
    }
}
