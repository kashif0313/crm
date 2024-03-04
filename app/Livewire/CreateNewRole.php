<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use App\Models\role as ModelsRole;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateNewRole extends Component
{
    #[Title("New Role")]

    #[Validate('required|min:3|max:50')] 
    public $roleName;
    
    #[Validate('required|min:3|max:50')] 
    public $roleDetails;

    public $modelUser=false ;
    public $modelRole=false ;
    public $createPermission=false;
    public $readPermission=false;
    public $editPermission=false;
    public $deletePermission=false;

    public function create() //creating new role for the users
    {//ddd($this->validate());
        $this->validate();
        
        ModelsRole::create([
            'name'=> $this->roleName ,
            'details'=> $this->roleDetails,
            'read'=> $this->readPermission,
            'edit'=> $this->editPermission,
            'create'=> $this->createPermission,
            'delete'=> $this->deletePermission,
            'users_access'=>$this->modelUser,
            'roles_access'=>$this->modelRole
            ]);
            toastr()->addSuccess('New Role Added .');
        return redirect('/roles');
    }
 
    public function render()
    {
        return view('livewire.create-new-role',[
            'roles'=>ModelsRole::latest()->get()
        ]);
    }
}
