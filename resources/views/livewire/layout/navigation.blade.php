<?php

use Livewire\Volt\Component;
use App\Models\Modulo;

new class extends Component
{
    
    public $modulos = [];

    public function mount()
    {
        $this->modulos = Modulo::All();
    }


}; 
?>

<div>
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-[18rem] h-screen transition-transform -translate-x-full xl:translate-x-0"
        aria-label="Sidebar">

        <nav class="fixed inset-y-0 text-black z-30 dark:text-white bg-white dark:bg-[#1f2937] flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased  border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-[18rem] ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 "
            aria-expanded="false">
            <!-- Primary Navigation Menu -->

            <div class="h-22 dark:bg-white">
                <i clas="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                    sidenav-close></i>
                <a class="block px-8 py-6 m-0 text-center text-sm whitespace-nowrap dark:text-white text-slate-700"
                    href="{{ route('dashboard') }}" target="_blank">
                    <img src="{{ asset('img/logo_horizontal.png') }}"
                        class="inline h-full max-w-full transition-all  dark:rounded-lg duration-200 ease-nav-brand max-h-20 max-w-92"
                        alt="main_logo" />
                </a>
            </div>
            <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
                <ul class="flex flex-col pl-0 mb-0">
                    
                    <li class="mt-0.5 w-full">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{ __('Dashboard') }}</span>
                        </x-nav-link>
                    </li>

                    @forelse ($modulos as $modulo)
                        <li class="mt-0.5 w-full">
                            <x-nav-link :href="route($modulo->ruta)" :active="request()->routeIs($modulo->ruta)">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                                </div>
                                <span
                                    class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{ $modulo->modulo }}</span>
                            </x-nav-link>
                        </li>
                    @empty
                        Ta vacio
                    @endforelse

                    

                </ul>
            </div>
        </nav>

    </aside>

</div>
