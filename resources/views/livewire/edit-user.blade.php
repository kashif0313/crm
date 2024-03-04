<div class="max-w-sm mx-auto mt-5">
    {{-- {{$editUser}} --}}
    <form  >
      <x-input title="Your Name" nameInput='name'  modelName='name' ></x-input>
      <x-input title="Your Name" nameInput='email' typeInput='email'  modelName='email' ></x-input>
             
      <select wire:model=role id="" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1" >
        @if(count($editUser->roles)!=0)
        @foreach ( $editUser->roles as $role)
            <option value="{{$role->id}}" selected>{{$role->name}}</option>  {{--value from db will be selected --}}
        @endforeach
        @else
        <option value="" selected>no role assigned</option>
        @endif
        @foreach ($roles as $role)
        
            <option value="{{$role->id}}">{{$role->name}}</option> {{--all roles are fetched from db and shown as dropdown list--}}
        @endforeach
    </select>

    {{-- prevent will stop button from doing default behavior--}}
    <x-button btnName='Submit' clickFunction='update'></x-button>
    <x-navButton btnName='Cancel' linkRef='/users'>
    </x-navButton>
    
  </form>

</div>
