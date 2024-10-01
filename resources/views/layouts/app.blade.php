<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <style>
        #splash {
            opacity: 1;
            transition: 0.5s ease;
        }

        .hidden {
            opacity: 0;
            pointer-events: none;
        }
    </style>
</head>

<body id="body" class="font-sans antialiased bg-newblack text-white px-5 md:px-0" @if (config('app.debug') == false) onload="showSplash()" @endif>
    @if (config('app.debug') == false )
        <div id="splash"
            class="w-screen h-screen absolute bg-newblack text-white flex items-center justify-center overflow-hidden z-50">
            <img id="lineOne" src="/line/line.png" alt="" class="animate-lineOne">
            <img id="lineTwo" src="/line/line.png" alt="" class="animate-lineTwo">
        </div>
    @endif
    
    <x-banner />
    <main>
        {{ $slot }}
    </main>

    @livewire('footer')

    @stack('modals')
    @livewireScripts

    <script>
        function showSplash() {
            const body = document.getElementById('body');
            body.classList.add('overflow-hidden');

            const splash = document.getElementById('splash');
            const lineOne = document.getElementById('lineOne');
            const lineTwo = document.getElementById('lineTwo');

            setTimeout(() => {
                lineOne.classList.add('animate-lineOneReverse');
            }, 1500);

            setTimeout(() => {
                lineTwo.classList.add('animate-lineTwoReverse');
            }, 2000);

            setTimeout(() => {
                splash.classList.add('hidden');
                body.classList.remove('overflow-hidden');
            }, 2250);

            window.onbeforeunload = function() {
                window.scrollTo(0, 0);
            }
        }
    </script>
</body>

</html>
