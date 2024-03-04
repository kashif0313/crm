@props(['wireModel' ,'checkboxName'])
<div class="flex items-center me-4">
    <input id="inline-checkbox" wire:model={{$wireModel}} type=checkbox  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
    <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">{{$checkboxName}}</label>
</div>