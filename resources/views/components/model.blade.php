@props(['name','userName','userID'])
<div 
x-data="{show : false , name:'{{$name}}'}" {{-- $name getting name of the modal to open the correct model --}}
x-show="show" 
x-on:open-modal.window = " show = ($event.detail.name === name)" {{-- if name matches make show = true otherwise false --}}
x-on:close-modal.window = "show = false"
x-transition
class="h-screen w-screen flex absolute inset-0 z-30">
    <div class="m-auto bg-white z-40  min-w-64 rounded px-3 py-2">
        <div class="flex justify-between mb-4">
            <h1>Delete Todo</h1>
        <button x-on:click="$dispatch('close-modal')" >x</button>
        </div>
        <span>Are you Sure You want to Delete </span><b>{{$userName}}</b><br>
        <button  wire:click="delete()" class="mt-3 px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-600">Delete</button>
        <button x-on:click="$dispatch('close-modal')" class="mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">Cancel</button>
    </div>
    <div x-on:click="$dispatch('close-modal')" class="bg-gray-200 h-screen w-screen fixed t-0 opacity-50"></div>  {{-- if clicked outside modal(BG) close modal --}}
</div>