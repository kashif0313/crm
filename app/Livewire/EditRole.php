<?php

namespace App\Livewire;

use App\Models\role;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class EditRole extends Component
{
    #[Title('Edit Role')]
    #[Url]  //this will allow var to store on the url
    public $roleID; 
    public $name;
    public $details;
    public $modelUser ;
    public $modelRole ;
    public $createPermission;
    public $readPermission;
    public $editPermission;
    public $deletePermission;
    
    public function mount() //this function will run on first time component is initialized
    {   $role = role::find($this->roleID);
        $this->name= $role->name; 
        $this->details= $role->details;
        $this->modelUser = $role->users_access ;
        $this->modelRole = $role->roles_access ;
        $this->createPermission = $role->create;
        $this->readPermission = $role->read;
        $this->editPermission = $role->edit;
        $this->deletePermission = $role->delete; 
       
    }
    public function update()   //updating the user with new name and email 
    {
        //ddd($this->oldRole);
         role::find($this->roleID)->update([
            'name'=> $this->name ,
            'details'=> $this->details,
            'read'=> $this->readPermission,
            'edit'=> $this->editPermission,
            'create'=> $this->createPermission,
            'delete'=> $this->deletePermission,
            'users_access'=>$this->modelUser,
            'roles_access'=>$this->modelRole
        ]);
        
        return redirect('/roles');  
    }
    public function render()
    {
        return view('livewire.edit-role',[
            'role'=>role::find($this->roleID)
        ]);
    }
}
