<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-48 h-screen pt-40 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 " aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
       <ul class="space-y-2 font-medium">
         <li>
           <a href="/dashboard" wire:navigate class="{{ request()->is('dashboard') ? 'bg-blue-600 text-white' : 'text-gray-500' }} flex items-center p-2  rounded-lg  hover:bg-blue-600 hover:text-white  group">
              <svg class="w-6 h-6  text-gray-500{{ request()->is('dashboard') ?  'text-white' : 'text-gray-500' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                 <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                 <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
              </svg>
              <span class="ms-3">Dashboard</span>
           </a>
        </li>
        
        @if (session('userRole')!= null)
      @if ( session('userRole')->users_access == true) {{--only allow user with user CURD permission--}}
          <li>
             <a href="/users" wire:navigate class="{{ request()->is('users','newUser') ? 'bg-blue-600 text-white' : 'text-gray-500'  }} flex items-center p-2 rounded-lg e hover:bg-blue-600 hover:text-white  group">
                
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  text-gray-500{{ request()->is('users') ?  'text-white' : 'text-gray-500' }}">
                   <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                 </svg>
                                  
                <span class="ms-3">Users</span>
             </a>
          </li>
      @endif
       
       @if ( session('userRole')->roles_access == true) {{--only allow roles with role CURD permission--}}
          <li>
          <a href="/roles" wire:navigate class="{{ request()->is('roles','newRole') ? 'bg-blue-600 text-white' : 'text-gray-500'  }} flex items-center p-2  rounded-lg  hover:bg-blue-600 hover:text-white group">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  text-gray-500{{ request()->is('roles','newRole') ?  'text-white' : 'text-gray-500' }}">
                <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
              </svg>
             <span class="ms-3">Roles</span>
          </a>
       </li>    
       @endif
       @endif
       </ul>
    </div>
 </aside>