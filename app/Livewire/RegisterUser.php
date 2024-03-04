<?php

namespace App\Livewire;

use App\Models\role;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
class RegisterUser extends Component
{
    #[Validate('required|min:3|max:50')] //this will apply validation rules
    public $name;

    #[Validate('required|min:3|max:50')] 
    public $email;

    #[Validate('required|min:3|max:50')] 
    public $password;


    public function create() //create user with the input data 
    {
        $validated = $this->validate();
        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
       
       //ddd($role);
       
        toastr()->addSuccess('Signup Successfully :)');
        $this->reset(['name','email','password']);
        return redirect('/login');    
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.register-user', [
            'roles'=>role::latest()->get()
          ]);
    }
}
