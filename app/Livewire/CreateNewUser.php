<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;

use App\Models\User;
use App\Models\role;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateNewUser extends Component
{
    #[Title('New User')]
    #[Validate('required|min:3|max:50')] //this will apply validation rules
    public $name;

    #[Validate('required|min:3|max:50')] 
    public $email;

    #[Validate('required|min:3|max:50')] 
    public $password;

    #[Validate('required')] 
    public $role;

    public $noUsers = 1;
    public $roleUser;

    public function mount() //this function will run on first time component is initialized
    {
        $this->roleUser = session('userRole'); //getting the variable value stored in the session
    
    }


    public function create() //create user with the input data 
    {
        $validated = $this->validate();
        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
       
       //ddd($role);
        if(isset($user))
        {
            $user->roles()->attach($this->role); //assigning role to the user using pivot table
        }
        toastr()->addSuccess('New User created Successfully :)');
        $this->reset(['name','email','password']);
        return redirect()->back();    
    }

    public function createNewSampleUser() //creates user using fake data
    {
        if($this->noUsers == '1') //if number of users are only one then this will run
        {
            $user =  User::factory()->create();
            $this->assignRoles($user);
            $this->dispatch('Re-Render-Chart');
        }
       else
       {
        $users =  User::factory($this->noUsers)->create(); // if number of users are more than one then this will run
            foreach($users as $user)
            {
                $this->assignRoles($user);
            }
            $this->dispatch('Re-Render-Chart');
       }
       //$user = User::find($newUser->id);
    //    $this->dispatch('Re-Render-Chart');
       toastr()->addSuccess('Sample User Added Successfully :)');
       return redirect('/dashboard');       
    }
    public function assignRoles($user) //function assigning roles
    {
        $role  = role::whereName('viewer')->first();
        //ddd($role);
         $user->roles()->attach($role);
    }

    public function render()
    {
        return view('livewire.create-new-user' ,
        [
          'roles'=>role::latest()->get()
        ]);
    }
}
