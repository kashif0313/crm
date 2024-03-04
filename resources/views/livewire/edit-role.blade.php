<div>
    <form  class="max-w-sm mx-auto mt-5">
    <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Role Name</label>
    <input wire:model='name' name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name" required>
    </div>
    @error('name')
            <span class="text-red-500 sm-text">{{$message}}</span>
            @enderror
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Detail</label>
        <textarea id="message" wire:model='details' name='details' rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write detail about role..."></textarea>
        @error('details')
        <span class="text-red-500 sm-text">{{$message}}</span>
        @enderror
    
        <div class="divide-y ">
            <div class="flex mt-3 mb-3">
    
                <span class="mx-5">Models</span>
                
                <div class="flex items-center me-4">
                    @if ($role->users_access)
                    <input id="inline-checkbox" wire:model='modelUser' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 " checked>
                @else
                    <input id="inline-checkbox" wire:model='modelUser' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                @endif
                    <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Users</label>
                </div>
                <div class="flex items-center me-4">
                    @if ($role->roles_access)
                        <input id="inline-checkbox" wire:model='modelRole' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 "checked>
                    @else
                        <input id="inline-checkbox" wire:model='modelRole' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                    @endif
                    <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Roles</label>
                </div>
            </div>
             <div class="flex pt-3 mb-3">
                <span class="mx-5">Permissions </span>
                <div class="flex items-center me-4">
                    @if ($role->create)
                        <input id="inline-checkbox" wire:model='createPermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 "checked>
                    @else
                        <input id="inline-checkbox" wire:model='createPermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                    @endif
                    
                    <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Create</label>
                </div>
                <div class="flex items-center me-4">
                    @if ($role->read)
                    <input id="inline-2-checkbox" wire:model='readPermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 "checked>
                    @else
                    <input id="inline-2-checkbox" wire:model='readPermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                    @endif
                    
                    <label for="inline-2-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Read</label>
                </div>
                <div class="flex items-center me-4">
                    @if ($role->edit)
                        <input id="inline-checkbox" wire:model='editPermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 " checked>
                    @else
                        <input id="inline-checkbox" wire:model='editPermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                    @endif
                    
                    <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Edit</label>
                </div>
                <div class="flex items-center me-4">
                    @if ($role->delete)
                        <input id="inline-checkbox" wire:model='deletePermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 "checked>
                    @else
                    <input id="inline-checkbox" wire:model='deletePermission' type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                    @endif
                    <label for="inline-2-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Delete</label>
                </div>
              
            </div>
        </div>

    <button wire:click.prevent='update' class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 mt-2 py-2.5 text-center">Submit</button>
</form>
</div>