<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="/dashboard" class="flex ms-2 md:me-24">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap ">Flowbite</span>
          </a>
        </div>
        <div class="flex items-center">
         
            <div class="flex items-center ms-3">
              {{-- if user is not loggd in this will be shown --}}
                  @guest
                  <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Login</a>
                  @endguest
                
               @auth
                <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                 <div  data-dropdown-toggle="language-dropdown-menu" class="block items-center font-medium justify-center px-4 py-2 text-sm text-gray-900  rounded-lg cursor-pointer hover:bg-gray-100">
                    <div class="flex">
                       <div>
                           <p class="text-sm text-gray-900" role="none">
                       Welcome {{auth()->user()->name}}
                     </p>
                     <p class="text-sm font-medium text-gray-500 truncate" role="none">
                       Role:{{session('userRoleTitle')}}
                     </p>
                       </div>
                      
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2">
                       <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                     </svg>
                    </div>
                    
                     
                    </div>
                 <!-- Dropdown -->
                 <div class="z-50 hidden my-4 mx-3 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow " id="language-dropdown-menu">
                   <ul class="py-2 font-medium" role="none">
                     
                     <li>
                       <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                         <div class="inline-flex items-center">
                           Logout
                         </div>
                       </a>
                     </li>
                     
                   </ul>
                 </div>
             </div>
             @endauth
              
            </div>
          </div>
      </div>
    </div>
  </nav>