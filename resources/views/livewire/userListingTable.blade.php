
<div x-data class="relative overflow-x-auto shadow-md sm:rounded-lg">
      
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
            <tr>
                <th scope="col" class="p-3">
                    <input id="all-checkbox" wire:click.live='selectAll' wire:model.live='SelectAllCheckbox'  x-on:click='selectAll()' type='checkbox'  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                </th>
                <th scope="col" class="px-6 py-3 hover:bg-gray-300"wire:click='setSortByCol("id")'>
                    <button class="flex item-center gap-2">
                         # 
                         @if($sortbyDirection == 'desc' && $sortByColumn == "id")
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                                <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                            </svg>
                          
                            @elseif($sortbyDirection == 'asc' && $sortByColumn == "id")
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                                <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                             <path fill-rule="evenodd" d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                           </svg>
                           
                           
                           
                         @endif
                     </button>
                   
                      
                </th>
                <th scope="col" class="px-6 py-3 hover:bg-gray-300" wire:click='setSortByCol("name")'>
                    <button class="flex item-center gap-2">
                        Name 
                        @if($sortbyDirection == 'desc'&& $sortByColumn == "name")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                           </svg>
                         
                           @elseif($sortbyDirection == 'asc' && $sortByColumn == "name")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
                           </svg>
                           @else
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                          </svg>
                          
                          
                        @endif
                    </button>
                </th>
                <th scope="col" class="px-6 py-3 hover:bg-gray-300" wire:click='setSortByCol("email")'>
                    <button class="flex item-center gap-2">
                       Email
                        @if($sortbyDirection == 'desc' && $sortByColumn == "email")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                           </svg>
                         
                        @elseif($sortbyDirection == 'asc' && $sortByColumn == "email")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
                           </svg>
                           @else
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                          </svg>
                          
                          
                        @endif
                    </button>
                </th>
                <th scope="col" class="px-6 py-3 hover:bg-gray-300" >
                    role
                </th>
                <th scope="col" class="px-6 py-3 hover:bg-gray-300" wire:click='setSortByCol("created_at")'>
                    <button class="flex item-center gap-2">
                        Date Created
                        @if($sortbyDirection == 'desc' && $sortByColumn == "created_at")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                           </svg>
                         
                           @elseif($sortbyDirection == 'asc' && $sortByColumn == "created_at")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
                           </svg>
                           @else
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                          </svg>
                          
                        @endif
                    </button>
                </th>
                <th scope="col" class="px-6 py-3 hover:bg-gray-300" wire:click='setSortByCol("updated_at")'>
                    <button class="flex item-center gap-2">
                        Date Modified
                        @if($sortbyDirection == 'desc' && $sortByColumn == "updated_at")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                           </svg>
                         
                           @elseif($sortbyDirection == 'asc' && $sortByColumn == "updated_at")
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-4">
                               <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
                           </svg>
                           @else
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                          </svg>
                          
                        @endif
                    </button>
                </th>
                <th scope="col" colspan="2" class="px-6 py-3 hover:bg-gray-300">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if (count($user) == "0")
            <tr>
                <td>
                     <span class="px-3 my-5">No result found on this Page</span>
                </td>
            </tr>
            
            @else
    @foreach ($user as $user_details)
    <tr class="odd:bg-white odd: even:bg-gray-100 hover:bg-slate-200">
        <th scope="row" class="p-3 font-medium text-gray-900 whitespace-nowrap">
            @if (session('userID')!= $user_details->id)
                <input id="{{$user_details->id}}" wire:model.live='usersCheckbox'  value="{{$user_details->id}}" type='checkbox'  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 " >
            @endif
                 
        </th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
            {{$user_details->id}}
        </th>
        <td class="px-6 py-4" id="searchName">
            
           {!! ucfirst(trans($user_details->name)) !!}
           
        </td>
        <td class="px-6 py-4">
            {!! $user_details->email !!}
        </td>
        <td class="px-6 py-4">
        @if(count($user_details->roles)!=0)
            @foreach ( $user_details->roles as $role)
                @if ($role->name == "admin")
                    <span class="bg-green-600 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded ">{{ ucfirst(trans($role->name)) }}</span>
                @elseif($role->name == "sub-admin")
                <span class="bg-blue-600 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded ">{{ ucfirst(trans($role->name)) }}</span>
                @elseif($role->name == "editor")
                <span class="bg-indigo-600 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded ">{{ ucfirst(trans($role->name)) }}</span>
                @else
                <span class="bg-yellow-500 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded ">{{ ucfirst(trans($role->name)) }}</span>  
                @endif
                
            @endforeach
            @else
            <span>no role assigned</span>
            @endif
        </td>
        <td class="px-6 py-4">
            {{ date('Y-m-d', strtotime($user_details->created_at)) }} 
        </td>
        <td class="px-6 py-4">
            {{ date('Y-m-d', strtotime($user_details->updated_at)) }} 
        </td>
        <td class="px-6 py-4">
            {{-- {{$roleUser}} --}}
            @if ($roleUser->edit == true && session('userRole')->users_access == true )
                <a href="edit?userID={{$user_details->id}}" wire:navigate class="font-medium text-blue-600 hover:underline">Edit</a>
            @endif
        </td>
        
        <td class="px-6 py-4">
            @if ($roleUser->delete == true && session('userRole')->users_access == true && session('userID')!= $user_details->id )
                <button type="button" wire:key='{{$user_details->id}}' wire:click='deleteConfirm("{{$user_details->id}}" , "{{$user_details->name}}")' class="font-medium text-red-600 hover:underline bg-transparent">Delete</button>
            @endif
        </td>
    </tr>
      @endforeach  
    @endif   
        </tbody>
    </table>
    
</div>
