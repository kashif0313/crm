@props(['nameInput','title','modelName' ,'typeInput'])
<div class="mb-5">
    <label for={{$nameInput}} class="block mb-2 text-sm font-medium text-gray-900">{{$title}}</label>
    <input wire:model={{$modelName}}  id={{$nameInput}} name={{$nameInput}}  type={{$typeInput ?? "text"}} class="bg-gray-50 border border-gray-300 text-grey-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{$title}}" required>
    <x-errorInput inputName={{$nameInput}}></x-errorInput>
</div>
