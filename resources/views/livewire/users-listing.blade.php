<div >
   <x-model name='Delete' userName='{{$selectedUserName}}' userID='{{$selectedUserID}}'>
</x-model>
<!-- Dropdown menu -->
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
    <div class="flex">

        @if ( session('userRole')->users_access == true)
        @if ( session('userRole')->create == true)
            <x-navButton btnName='Create New User +' linkRef='/newUser'>
            </x-navButton>
        @endif
    @endif
    @if (count($usersCheckbox) != 0)
    <div >
        <x-button btnName='Delete Selected {{count($usersCheckbox)}}'  clickFunction="deleteUsers" >
            <div role="status" abled wire:loading >
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-300 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                <span class="sr-only">Loading...</span>
            </div></x-button>
        {{-- Selected {{count($usersCheckbox)}} --}}
       
    </div>
    @endif
    </div>



   <div class="flex items-center">
 
    <label for="table-search" class="sr-only">Search</label>
   <div class="relative mx-2">
       <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
           <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
           </svg>
       </div>
       <input type="search" wire:model.live='searchUser' id="table-search" class="block  ps-10 text-sm py-2 text-gray-900 border border-gray-300 rounded-lg sm:w-40 lg:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for User / Email">
   </div>

   
    
   <!-- Dropdown menu -->
   <x-selectDropdown liveFunction="roleFilter" defaultSelectd="All"  defaultSelectdValue="">
    @foreach ( $roles as $role)
       <option value="{{$role->id}}" selected>{{$role->name}}</option>
    @endforeach
 </x-selectDropdown>
 <div class="mx-1">
    <!-- Dropdown menu -->
    <x-selectDropdown liveFunction="dbRows" defaultSelectd="5" defaultSelectdValue="5" >
     <option value="10">10</option>
     <option value="50">50</option>
  </x-selectDropdown>
 
 </div>
      
   </div>
</div>
{{-- <x-button btnName='De Select'  clickFunction="getArray" ></x-button> --}}
<div disabled wire:loading class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-200 my-1 overflow-hidden">
    <div class="bg-blue-600 h-2.5 rounded-full loading-bar" style="width: 35%"></div>
</div>
  @include('livewire.userListingTable')
<div class="my-10">
    {{$user->onEachSide(1)->links()}} 
</div>

 </div>