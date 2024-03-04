<div>
    <form  class="max-w-sm mx-auto mt-5">      
    <x-input title="Your Name" nameInput='name'  modelName='name' ></x-input>
    <x-input title="Your Email" nameInput='email'  modelName='email' typeInput='email'></x-input>       
    <x-input title="Your Password" nameInput='password'  modelName='password' typeInput='password'></x-input>
    @if ((session('userRole')) != null)
        <x-selectDropdown liveFunction="role" defaultSelectd="Select Role" defaultSelectdValue="5">
            @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
        </x-selectDropdown>
        @endif
    <div class="flex space-x-2 my-2">
        
        @if ( session('userRoleTitle') == "admin")
        <x-button btnName='Create' clickFunction='create'></x-button>
            <x-navButton btnName='Cancel' linkRef='/users'>
        </x-navButton>
        @else
        <x-button btnName='Signup' clickFunction='create'></x-button>
            <x-navButton btnName='Login' linkRef='/login'>
        </x-navButton>
        @endif
    </div>
</form>
</div>
