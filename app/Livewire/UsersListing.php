<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Session;
use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\role;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class UsersListing extends Component
{
    
    use WithPagination;
    #[Title("Users")]
    #[Url(as : 's' ,history:true )]
        public $searchUser;
    #[Url(as : 'role' ,history:true )]
    public $roleFilter="";
    public $dbRows="5";
    public $userPermission;
    public $highlightText;
    public $sortbyDirection = "asc";
    public $sortByColumn = 'id';
    public $allCheckbox = false;
    public $usersCheckbox = [];
    public $selectedUserID;
    public $selectedUserName;
    public $roleUser;  
    public $roleNew;
    public bool $SelectAllCheckbox;
   
    public function mount() //this function will run on first time component is initialized
    {
        $this->roleUser = session('userRole'); //retriving the var from the session
    
    }

    public function updatedSearchUser()
    {
        $this->resetPage();
    }
    public function deleteConfirm($userID,$userName) //opening the confirm model using alpinejs
    {
        $this->selectedUserID = $userID;
        $this->selectedUserName = $userName;
        print_r($userID , $userName);
        $this->dispatch('open-modal' , name:'Delete'); //calling alpinejs function to open the modal 
    }
    public function delete() // after confirming delete the specific user
    {
        //ddd($userDeleteID);
        User::find($this->selectedUserID)->delete();
        $this->dispatch('close-modal' ,name:'Delete');
        toastr()->addSuccess('User Deleted Successfully .'); //displaying the success message
        
    }
    
    public function selectAll()
    {
        if($this->SelectAllCheckbox == true)
        {
            
                $this->usersCheckbox = [];
                
                     $users = User::when($this->roleFilter !== "" ,function($query){
                        $query->whereHas('roles',function($query){ // relation to join the tables and querying on it 
                       
                            $query->where('role_id',$this->roleFilter); //matching role_id with provided roleID in roleFilter  
                        });
                    })->orderBy($this->sortByColumn , $this->sortbyDirection)->paginate($this->dbRows);
                
                   
                foreach($users as $user )
                {
                    if($user->id != 1)
                    {
                         array_push($this->usersCheckbox , $user->id);
                    }
                   
                }
                //array_unique($this->usersCheckbox);
         }
         else
            {
                $this->usersCheckbox = [];
                
            } 
        
       
    }
    public function getArray()
    {
        $this->SelectAllCheckbox = false;
        //ddd($this->usersCheckbox);
    }
    public function deleteUsers()
    {
        //ddd($this->usersCheckbox);
        foreach($this->usersCheckbox as $userDeleteID)
        {
                $deleteUser = User::find($userDeleteID);
                if($deleteUser != null)
                {
                    $deleteUser->delete();
                }        
        //ddd($this->usersCheckbox);
        }
        $this->SelectAllCheckbox = false;
        $this->usersCheckbox = [];
       toastr()->addSuccess('User Deleted Successfully .');
    }
    public function updateRole($userRole) //updating the role
    {
        $userID = user::find($userRole);
        //ddd($this->roleNew);
        $userID->roles()->attach($this->roleNew);
         $userID->save();
         toastr()->addSuccess('User role updated Successfully .');
    }
    public function setSortByDir($sortbyDir)
    {
         $this->sortbyDirection = $sortbyDir;
    }
    public function setSortByCol($sortbyCol)
    {
         $this->sortByColumn = $sortbyCol;
         if($this->sortbyDirection == 'desc')
         {
             $this->setSortByDir('asc');
         }
         else
         {
            $this->setSortByDir('desc');
         }
    }

   
    public function render()
    {
        $userQuery = User::when($this->roleFilter !== "" ,function($query){
            $query->whereHas('roles',function($query){ // relation to join the tables and querying on it 
           
                $query->where('role_id',$this->roleFilter); //matching role_id with provided roleID in roleFilter  
            });
        })->search(trim($this->searchUser))->orderBy($this->sortByColumn , $this->sortbyDirection)->paginate($this->dbRows);
        
        foreach ($userQuery as $item) {
            
            $item->name = Str::replace($this->searchUser, "<mark>$this->searchUser</mark>", $item->name);
            $item->email = Str::replace($this->searchUser, "<mark>$this->searchUser</mark>", $item->email);
            // Repeat the above process for other fields as needed
        }
        
        return view('livewire.users-listing',['user'=>$userQuery ,'roles'=> role::latest()->get()]);
    }
}
