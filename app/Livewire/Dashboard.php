<?php

namespace App\Livewire;

use App\Models\role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Session;
use Livewire\Attributes\Title;
use Livewire\Attributes\On;
use Livewire\Component;


class Dashboard extends Component
{
    public $changeChart;

    #[On('Re-Render-Chart')]
    public function updateChart()
    {
        $this->dispatch('user-created');
    }
    

    #[Title("Dashboard")]

    public $totalViewers ;
    public $usersNumber=1;
    public $percentUsers=5;
    public $todayYesterday;
    public $days;
    public $RawUsers;
    public $userCountByMonth;
    public $userDataArray =[];
    public $roleDataUserArray=[];
    public $userLabel=[];
    public $userData=[];
    public $roleLabel=[];
    public $roleData=[];
    public $months=[];
    public $rolesUsersArray = [];
    public $colors=['#FF6384' , '#36A2EB', '#FFCE56', '#8BC34A', '#FF5722', '#009688'];
    public $getUser = 0;
    public $userDatasets;
    public $roleDatasets=[];

   public function mount()
   {
     $this->graphByMonth();
     $this->graphByRoles();
   }
   
    public function newUsersRandom()
    {
        $randNo = rand(1,9); 
        // $this->usersNumber = $this->usersNumber + $randNo;
        $this->usersNumber = $randNo;
        $this->percentUsers = rand(1,99);
        $randUser = rand(0,99);
        array_push($this->userDataArray , $randUser);
    }
    public function graphByMonth()
    {
        $users = User::selectRaw('Month(created_at) as month, count(*) as count')->whereYear('created_at',date('Y'))->groupBy('month')->orderBy('month')->get();
     for($i=1 ; $i<12 ; $i++)
     {
        $month = date('F',mktime(0,0,0,$i,1));
        $count=0;

        foreach($users as $user)
        {
            if($user->month == $i)
            {
                $count = $user->count;
                break;
            }
        }
        array_push($this->userLabel,$month);
        array_push($this->userData,$count);
        
     }
     
     
     $this->userDatasets = [
        [
            'label'=>'Users',
            'data'=>$this->userData,
            'backgroundColor' =>$this->colors
        ]
        ];
        $this->dispatch('newChartUpdate');
    }

    public function graphByRoles()
    {
     
        $roles = Role::with('users')->get();

    foreach ($roles as $role) {
        // $labels[] = $role->name;
        // $data[] = count($role->users);
         array_push($this->roleLabel, $role->name);
         array_push($this->roleData , count($role->users));
         $this->roleDatasets[] = ['name' => $role->name, 'y' => count($role->users)];
    }
    // $this->roleDatasets = [
    //     [
    //         'name'=>$this->roleLabel,
    //         'y'=>$this->roleData,   
    //     ]
    //     ];
     }
    public function filterDates()
    {

    }
    public function changeDays($day)
    {
        if($day != 'Today' || $day != 'Yesterday')
        {
            $this->days = $day;
        }
        else
        {
            $this->todayYesterday = $day ;
        }
        
    }
    
    public function updateData() {
        $this->dispatch("Render-Chart");
    }

    public function render()
    {
         
        $roleQuery = role::get();
        $userQuery = User::get();
        
            // ->toArray();
        //ddd($selection);
        //check if roleFilter is not empty then filter users according to roles
        return view('livewire.dashboard',[
            'user'=> $userQuery,
            'role'=> $roleQuery
        ]);
    }
}
