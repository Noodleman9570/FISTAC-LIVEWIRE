<div>
    <x-app-layout>


        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>


        <div class="pt-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 text-black dark:text-white">

                <livewire:formulario lazy>

                    <div class="mt-4">
                        <livewire:comments>
                    </div> 

                    {{-- <livewire:father /> --}}

                    {{-- <livewire:contribuyente-table/> --}}

            </div>
        </div>


    </x-app-layout>

</div>
