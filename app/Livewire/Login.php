<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Session;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login')]
    #[Session(key: 'userRole')]
    public $userRole;

    #[Validate('required|min:3|max:50')] 
    public $email;
    #[Validate('required|min:3|max:50')] 
    public $password;

    public function mount()
    {
        if(session(['userRole']) == null)
        {
             $userID = user::find("1");
            //ddd($this->roleNew);
            //$userID->roles()->attach("1");
            $userID->roles()->sync([1]);
            $userID->save();
        }
    }

    public function create()
    {
            $attributes = $this->validate();
            if (auth()->attempt($attributes))     //authenticating user using the credentials provided by user
            {
               
                     $user = auth()->user()->roles;
                    foreach($user as $role)
                    {
                        $this->userRole = $role;
                    }
                    session(['userRole' => $this->userRole]);
                    session(['userRoleTitle' => $this->userRole->name]);
                    session(['userID' => $this->userRole->id]);
                
                
            // ddd($this->userRole);
            
                return redirect('/dashboard')->with('success', 'welcome Back');
            }
            throw ValidationException::withMessages(
                [
                    'message' => 'Your provided credentials could not be verified'
                ]
            );         
             
    }
    #[Layout('components.layouts.guest')]

    public function render()
    {
        return view('livewire.login');
    }
}
