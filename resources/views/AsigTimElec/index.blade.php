<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Timbre electronico') }}
        </h2>
    </x-slot>

        <div class="pt-12 xl:pl-[10rem]">
            <div class=" p-4 rounded-lg mx-auto sm:px-6 lg:px-8 text-black dark:text-white">
    
                <livewire:AsigTimElec.index>

            </div>
        </div>
    

</x-app-layout>
