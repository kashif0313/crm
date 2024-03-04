@props(['inputName'])
    @error($inputName)
        <span class="text-red-500 sm-text">{{$message}}</span>
    @enderror