@props(['defaultSelectd','liveFunction','defaultSelectdValue'])
<select wire:model.live={{$liveFunction}} id="" class="inline-flex items-center text-gray-500 py-2 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3" >
    <option value="{{$defaultSelectdValue}}" selected>{{$defaultSelectd}}</option>
    {{$slot}}
 </select>