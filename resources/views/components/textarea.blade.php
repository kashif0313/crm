@props(['name','wireModel','title'])
<label for={{$name}} class="block mb-2 text-sm font-medium text-gray-900 ">{{$title}}</label>
<textarea id={{$name}} wire:model="{{$wireModel}}" name='{{$name}}' rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder={{$name}}></textarea>
<x-errorInput inputName={{$name}}></x-errorInput>