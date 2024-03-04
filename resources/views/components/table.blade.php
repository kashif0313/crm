@props(['columnName[]'])
<table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">
                {{$columnName[0]}}
            </th>
            <th scope="col" class="px-6 py-3">
                {{$columnName[1]}}
            </th>
            <th scope="col" class="px-6 py-3">
                email
            </th>
            <th scope="col" class="px-6 py-3">
                role
            </th>
            <th scope="col" colspan="2" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    {{-- <tbody>
        @if (count($user) == "0")
        <tr>
            <td>
                 <span class="px-3 my-5">No result found</span>
            </td>
        </tr>
        
        @else
@foreach ($user as $user_details)
<tr class="odd:bg-white odd: even:bg-gray-50 ">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
        {{$user_details->id}}
    </th>
    <td class="px-6 py-4">
        {{$user_details->name}}

    </td>
    <td class="px-6 py-4">
        {{$user_details->email}}
    </td>
    <td class="px-6 py-4">
    @if(count($user_details->roles)!=0)
        @foreach ( $user_details->roles as $role)
            {{ $role->name}}
        @endforeach
        @else
        <span>no role assigned</span>
        @endif
    </td>
    <td class="px-6 py-4">
       
        @if ($roleUser->edit == true && session('userRole')->users_access == true)
            <a href="edit?userID={{$user_details->id}}" class="font-medium text-blue-600 hover:underline">Edit</a>
        @endif
    </td>
    <td class="px-6 py-4">
        @if ($roleUser->delete == true && session('userRole')->users_access == true)
            <button type="button" wire:click.prevent='deleteConfirm("{{$user_details->id}}" , "{{$user_details->name}}")' class="font-medium text-red-600 hover:underline bg-transparent">Delete</button>
        @endif
    </td>
</tr>
  @endforeach  
@endif   
    </tbody> --}}
</table>