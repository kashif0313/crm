<?php

namespace App\Livewire;

use App\Models\role;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;


class EditUser extends Component
{
    #[Title('Edit User')]
    public $name;
    public $email;
    public $role; 
    #[Url]  //this will allow var to store on the url
    public $userID; 

    public function mount() //this function will run on first time component is initialized
    {
        $this->name = User::find($this->userID)->name; 
        $this->email = User::find($this->userID)->email;
        
    }
    public $oldRole;

    public function update()   //updating the user with new name and email 
    {
        //ddd($this->oldRole);
         User::find($this->userID)->update([
            'name'=> $this->name,
            'email'=> $this->email
        ]);
        
        $userSyncID = user::find($this->userID); 
        if($this->role != null)
        {
            $userSyncID->roles()->sync($this->role); //this will join the new values of roles assign to the user if not default will be assigned
            //$this->userID->roles()->attach($this->role);
             $userSyncID->save();
        }
        
        $this->reset(['userID']);  //this will reset the form
        return redirect('/dashboard');  
    }
    public function render()
    {
       // ddd($this->userID);
        return view('livewire.edit-user' , [
            'editUser'=> User::find($this->userID),
            'roles'=>role::latest()->get()
        ]);
    }
}
