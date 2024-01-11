<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href=" {{ asset('img/icon-logo_sedebat.png') }}" />


    <title>SEDEBAT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />

    <style>

        [x-cloak] { display: none !important; }
    
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body 
    class="font-sans antialiased m-0 font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:bg-blue-900 min-h-75"></div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900" >
            <livewire:layout.navigation />
            <!-- Page Content -->
            <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl xl:ml-32 md:ml-32">
                <!-- Page Heading -->
                @if (isset($header))
                    <livewire:topNavbar wire:model='page'>
                @endif
                {{ $slot }}
            </main>
        </div>
    </div>


  

</div>

    
    @stack('modals')

    @livewireScripts

    @stack('js')
</body>


<!-- plugin for charts  -->
<script src="{{ asset('/js/plugins/chartjs.min.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>
{{-- Dark Mode --}}
<script src="{{ asset('/js/darkmode.js') }}"></script>


</html>
