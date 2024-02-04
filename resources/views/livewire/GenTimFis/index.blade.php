<div>
    <div class="pt-12 xl:pl-[10rem]">
        <div
            class="md:w-[70vw]  bg-white dark:bg-[#111827] p-4 rounded-lg mx-auto sm:px-6 lg:px-8 text-black dark:text-white">

            <h1 class=" my-7 text-center text-2xl text-black dark:text-white font-black">Generar timbres fiscales</h1>

            <ol class="flex items-center w-full lg:w-[95vw]">
                @if ($step1)
                    <li
                        class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-500 after:border-4 after:inline-block dark:after:border-blue-800">
                        <span
                            class="flex items-center justify-center w-10 h-10 bg-blue-200 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                            <svg class="w-3.5 h-3.5 text-blue-600 lg:w-4 lg:h-4 dark:text-blue-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        </span>
                    </li>
                @else
                    <li
                        class="flex w-full items-center text-gray-600 dark:text-gray-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                        <span
                            class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                            <svg class="w-4 h-4 text-gray-500 lg:w-5 lg:h-5 dark:text-gray-100" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path
                                    d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                            </svg>
                        </span>
                    </li>
                @endif
                @if ($step1 && $step2)
                    <li
                        class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-500 after:border-4 after:inline-block dark:after:border-blue-800">
                        <span
                            class="flex items-center justify-center w-10 h-10 bg-blue-200 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                            <svg class="w-3.5 h-3.5 text-blue-600 lg:w-4 lg:h-4 dark:text-blue-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        </span>
                    </li>
                @else
                    <li
                        class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                        <span
                            class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                            <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 17h6m-3 3v-6M4.9 4H9c.5 0 .9.4.9.9V9c0 .5-.4.9-.9.9H5a.9.9 0 0 1-.9-.9V5c0-.5.4-.9.9-.9Zm10 0H19c.5 0 .9.4.9.9V9c0 .5-.4.9-.9.9h-4a.9.9 0 0 1-.9-.9V5c0-.5.4-.9.9-.9Zm-10 10H9c.5 0 .9.4.9.9V19c0 .5-.4.9-.9.9H5a.9.9 0 0 1-.9-.9v-4c0-.5.4-.9.9-.9Z" />
                            </svg>
                        </span>
                    </li>
                @endif
                @if ($step1 && $step2 && $step3)
                    <li class="flex items-center w-full">
                        <span
                            class="flex items-center justify-center w-10 h-10 bg-blue-200 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                            <svg class="w-3.5 h-3.5 text-blue-600 lg:w-4 lg:h-4 dark:text-blue-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        </span>
                    </li>
                @else
                    <li class="flex items-center w-full">
                        <span
                            class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5c0 1.1.9 2 2 2h1v-4c0-.6.4-1 1-1h10c.6 0 1 .4 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4c0 .6-.4 1-1 1H9Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </li>
                @endif


            </ol>

            @if (!$step1)
            <p class="text-xl my-10 mx-5"> Selecciona un timbres a imprimir según su unidad tributaria </p>

            <div class="flex flex-wrap">

                <div wire:click='selectedTimbre(1)'
                    class=" {{ $timbre_1 ? 'scale-110 z-40' : '' }} my-4 sm:w-1/2 px-10 mb-3 lg:w-1/3 xl:flex-none hover:scale-110 transition duration-400 hover:z-40">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                        <div class="relative overflow-hidden rounded-2xl">
                            <img src="{{ asset('storage/Timbres_Fisicos/1_utet.jpg') }}" alt="imagen"
                                class="w-full h-full object-cover z-0 ">
                            <div
                                class="{{ $timbre_1 ? '' : 'invisible' }} absolute top-20 left-32 text-blue-600 text-9xl">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span
                                class="absolute top-0 left-0 w-full h-full bg-center bg-cover hover:bg-gradient-to-tl rounded-2xl hover:border-solid border-blue-600 hover:border-8 {{ $timbre_1 ? 'border-solid border-blue-600 border-8' : '' }} hover:opacity-80  hover:ease-in duration-200"></span>

                        </div>
                    </div>
                </div>

                <div wire:click='selectedTimbre(5)'
                    class=" {{ $timbre_5 ? 'scale-110 z-40' : '' }} my-4 sm:w-1/2 px-10 mb-3 lg:w-1/3 xl:flex-none hover:scale-110 transition duration-400 hover:z-40">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                        <div class="relative overflow-hidden rounded-2xl">
                            <img src="{{ asset('storage/Timbres_Fisicos/5_utet.jpg') }}" alt="imagen"
                                class="w-full h-full object-cover z-0 ">
                            <div
                                class="{{ $timbre_5 ? '' : 'invisible' }} absolute top-20 left-32 text-blue-600 text-9xl">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span
                                class=" {{ $timbre_5 ? 'border-solid border-blue-600 border-8' : '' }} absolute top-0 left-0 w-full h-full bg-center bg-cover hover:bg-gradient-to-tl rounded-2xl hover:border-solid border-blue-600 hover:border-8  hover:opacity-80  hover:ease-in duration-200"></span>

                        </div>
                    </div>
                </div>

                <div wire:click='selectedTimbre(10)'
                    class=" {{ $timbre_10 ? 'scale-110 z-40' : '' }} my-4 sm:w-1/2 px-10 mb-3 lg:w-1/3 xl:flex-none hover:scale-110 transition duration-400 hover:z-40">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                        <div class="relative overflow-hidden rounded-2xl">
                            <img src="{{ asset('storage/Timbres_Fisicos/10_utet.jpg') }}" alt="imagen"
                                class="w-full h-full object-cover z-0 ">
                            <div
                                class="{{ $timbre_10 ? '' : 'invisible' }} absolute top-20 left-32 text-blue-600 text-9xl">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span
                                class=" {{ $timbre_10 ? 'border-solid border-blue-600 border-8' : '' }} absolute top-0 left-0 w-full h-full bg-center bg-cover hover:bg-gradient-to-tl rounded-2xl hover:border-solid border-blue-600 hover:border-8  hover:opacity-80  hover:ease-in duration-200"></span>

                        </div>
                    </div>
                </div>

                <div wire:click='selectedTimbre(20)'
                    class=" {{ $timbre_20 ? 'scale-110 z-40' : '' }} my-4 sm:w-1/2 px-10 mb-3 lg:w-1/3 xl:flex-none hover:scale-110 transition duration-400 hover:z-40">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                        <div class="relative overflow-hidden rounded-2xl">
                            <img src="{{ asset('storage/Timbres_Fisicos/1_utet.jpg') }}" alt="imagen"
                                class="w-full h-full object-cover z-0 ">
                            <div
                                class="{{ $timbre_20 ? '' : 'invisible' }} absolute top-20 left-32 text-blue-600 text-9xl">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span
                                class="{{ $timbre_20 ? 'border-solid border-blue-600 border-8' : '' }} absolute top-0 left-0 w-full h-full bg-center bg-cover hover:bg-gradient-to-tl rounded-2xl hover:border-solid border-blue-600 hover:border-8  hover:opacity-80  hover:ease-in duration-200"></span>

                        </div>
                    </div>
                </div>

                <div wire:click='selectedTimbre(50)'
                    class=" {{ $timbre_50 ? 'scale-110 z-40' : '' }} my-4 sm:w-1/2 px-10 mb-3 lg:w-1/3 xl:flex-none hover:scale-110 transition duration-400 hover:z-40">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                        <div class="relative overflow-hidden rounded-2xl">
                            <img src="{{ asset('storage/Timbres_Fisicos/1_utet.jpg') }}" alt="imagen"
                                class="w-full h-full object-cover z-0 ">
                            <div
                                class="{{ $timbre_50 ? '' : 'invisible' }} absolute top-20 left-32 text-blue-600 text-9xl">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <span
                                class="{{ $timbre_50 ? 'border-solid border-blue-600 border-8' : '' }} absolute top-0 left-0 w-full h-full bg-center bg-cover hover:bg-gradient-to-tl rounded-2xl hover:border-solid border-blue-600 hover:border-8  hover:opacity-80  hover:ease-in duration-200"></span>

                        </div>
                    </div>
                </div>


            </div>
            @else
            <div class="mb-5">
                <p class="text-xl my-10 mx-5"> Elige la cantidad de hojas a imprimir </p>

                <input type="number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
              </div>
            @endif
            

            


            <div class="my-10 flex justify-center">
                <button wire:click='back' type="button"
                    class="{{ $step1 || $step2 || $step3 ? '' : 'hidden' }} focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-10 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Regresar
                    <i class="bi bi-arrow-left"></i></button>

                <button wire:click='checkStep1' type="button"
                    class="{{ $step1 ? 'hidden' : '' }} focus:outline-none text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl px-10 py-3 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">Siguiente
                    <i class=" ml-3 bi bi-arrow-right"></i></button>

                <button wire:click='checkStep2' type="button"
                    class="{{ ($step2 || !$step1)  ? 'hidden' : '' }} focus:outline-none text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl px-10 py-3 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">Siguiente
                    <i class=" ml-3 bi bi-arrow-right"></i></button>

                <button wire:click='checkStep3' type="button"
                    class="{{ (!$step2 || !$step1 ) ? 'hidden' : '' }} focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-10 py-3 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Imprimir
                    <i class="bi bi-printer-fill"></i></button>
            </div>

        </div>
    </div>
</div>
