@props(['btnName','clickFunction'])

<button type="button" wire:loading.attr='hidden' wire:click.prevent={{$clickFunction}} class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 ">{{$btnName}}</button>

{{-- <x-navButton :wire:click.prevent="{{$clickFunction}}" ></x-navButton> --}}