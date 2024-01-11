<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="titulo">
        Dashboard
    </x-slot>
  
    <x-slot name="page">
        Dashboard
    </x-slot>

    <div class="pt-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 text-black dark:text-white">

                <livewire:formulario lazy>

                <div class="mt-4">
                    <livewire:comments>
                </div>

            {{-- <livewire:father /> --}}

        </div>
    </div>
    
    
</x-app-layout>
