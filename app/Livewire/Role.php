<?php

namespace App\Livewire;

use App\Models\role as ModelsRole;
use Livewire\Attributes\Title;
use Livewire\Component;

class Role extends Component
{
    #[Title('Role')]
    public $selectedRoleID;
    public $selectedRoleName;
    public function deleteConfirm($userID,$userName) //opening confirm delete model
    {
        //ddd("clicked");
        $this->selectedRoleID = $userID;
        $this->selectedRoleName = $userName;
        $this->dispatch('open-modal' , name:'Delete'); //calling alpinejs function to open the modal 
    }
    public function delete() //deleting after confirmation
    {
        //ddd($userDeleteID);
        ModelsRole::find($this->selectedRoleID)->delete();
        $this->dispatch('close-modal' ,name:'Delete');
        toastr()->addSuccess('Role Deleted Successfully .');
    }
    

    public function render()
    {
        return view('livewire.role',[
            'roles'=>ModelsRole::latest()->get()
        ]);
    }
}
