<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Prueba 
        </h2>
    </x-slot>  

    @persist('player')
        <audio src="{{ asset('audios/sky.flac') }}" controls></audio>
    @endpersist()
</x-app-layout>