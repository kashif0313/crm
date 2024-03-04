<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ $title ?? 'Page Title' }}</title>
        
    </head>
    <body id="mainBody">


@include('components.header')
@include('components.sideBar')
<div class="pt-40 px-5 sm:ml-48">
   <div class="min-h-[30rem]"> {{-- setting min height to make sure footer stays at bottom of page if content is less --}}
        {{ $slot }}
   </div>


@include('components.footer')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    </body>
</html>



