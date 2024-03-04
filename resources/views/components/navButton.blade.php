@props(['btnName','linkRef'])
<a href={{$linkRef}} wire:navigate> 
<button type="button"  wire:loading.attr="disabled" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">{{$btnName}}</button>
</a>