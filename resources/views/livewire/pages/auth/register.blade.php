<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div>
    {{-- <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}

    <body
        class="m-0 font-sans antialiased font-normal bg-gradient-to-r from-sky-200 to-indigo-100 dark:bg-gradient-to-r dark:from-blue-950 dark:to-blue-800  bg-white text-start text-base leading-default text-slate-500">
        <!-- Navbar -->
        <nav
            class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
            <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
                <button navbar-trigger
                    class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                    type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                        <span bar1
                            class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                        <span bar2
                            class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                        <span bar3
                            class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                    </span>
                </button>
                <div navbar-menu
                    class="items-center flex-grow transition-all ease duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-2xl lg:flex lg:basis-auto">
                    <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg-max:py-2 lg:flex-row xl:ml-auto">

                        <li>
                            <a class="block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75"
                                href="{{ route('register') }}">
                                <i class="mr-1 text-white lg-max:text-slate-700 fas fa-user-circle opacity-60"></i>
                                Registrarse
                            </a>
                        </li>
                        <li>
                            <a class="block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75"
                                href="{{ route('login') }}">
                                <i class="mr-1 text-white lg-max:text-slate-700 fas fa-key opacity-60"></i>
                                Login
                            </a>
                        </li>
                        <li>
                            <button id="theme-toggle" type="button"
                                class="text-gray-100 dark:text-gray-100 hover:bg-gray-600 transition duration-150 ease-out dark:hover:bg-gray-300 dark:hover:text-gray-800 rounded-lg text-sm p-2.5">
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 2 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 1 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="mt-0 transition-all duration-200 ease-in-out">
            <section class="min-h-screen">
                <div
                    class="bg-top relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl">
                    <img src="{{ asset('img/obelisco.jpeg') }}" class="absolute -top-[30vw] px-15" alt="">
                    <span
                        class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-50"></span>
                    <div class="container z-10">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                                <h1 class="mt-12 mb-2 text-6xl text-white">¡BIENVENIDO!</h1>
                                <p class="text-white ">Sistema de generacion y control de timbres fiscales SEDEBAT</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="flex flex-wrap dark:text-white -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                        <div
                            class="w-full  max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative dark:bg-[#334371] z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                                <div class="p-6 mb-0 text-center border-b-0 rounded-t-2xl flex justify-center">
                                    <img src="{{ asset('img/logo_horizontal.png') }}" class="w-[18vw]" alt="">
                                </div>

                                <div class="flex-auto p-6">
                                    <form role="form  text-left">

                                        <div class="mb-8">
                                            <input type="email"
                                                class="placeholder:text-gray-500 text-sm h-12 focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white dark:bg-gray-400  bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                                        </div>
                                        <div class="mb-12">
                                            <input type="password"
                                                class="placeholder:text-gray-500 text-sm h-12 focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white dark:bg-gray-400  bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder="Password" aria-label="Password"
                                                aria-describedby="password-addon" />
                                        </div>

                                        <div class="text-center">
                                            <button type="button"
                                                class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                                Ingresar
                                            </button>
                                        </div>
                                        {{-- <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a
                                                href="../pages/sign-in.html" class="dark:text-white font-black text-slate-700">Sign
                                                in</a></p> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
            <footer class="py-4">
                <div class="container">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex-shrink-0 w-full max-w-full mx-auto mb-6 text-center lg:flex-0 lg:w-8/12">
                            <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                                Company </a>
                            <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                                About Us </a>
                            <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                                Team </a>
                            <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                                Products </a>
                            <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                                Blog </a>
                            <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                                Pricing </a>
                        </div>
                        <div class="flex-shrink-0 w-full max-w-full mx-auto mt-2 mb-6 text-center lg:flex-0 lg:w-8/12">
                            <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                                <span class="text-lg fab fa-dribbble"></span>
                            </a>
                            <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                                <span class="text-lg fab fa-twitter"></span>
                            </a>
                            <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                                <span class="text-lg fab fa-instagram"></span>
                            </a>
                            <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                                <span class="text-lg fab fa-pinterest"></span>
                            </a>
                            <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                                <span class="text-lg fab fa-github"></span>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                            <p class="mb-0 text-slate-400">
                                Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                SEDEBAT
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        </main>
    </body>

</div>
