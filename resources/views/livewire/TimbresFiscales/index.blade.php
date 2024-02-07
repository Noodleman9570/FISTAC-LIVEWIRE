<div>

    <div class="w-[82vw] xl:w-[76vw] px-6 py-6 mx-auto xl:ml-48 md:w-full md:-ml-20">
        <!-- content -->

        <div class="flex flex-wrap ">
            {{-- Chart --}}
            <div class="w-full max-w-full px-3 mb-6 xl:mb-0 xl:w-1/2 xl:flex-none ">
                <livewire:pie-chart />
            </div>



            <div class="w-full max-w-full px-3 xl:w-1/2 xl:flex-none">
                <div class="flex flex-wrap gap-4 -mx-3 p-3">

                    {{-- Primera card --}}
                    <div class="w-full max-w-full dark:bg-[#111c44] pt-0 rounded-2xl md:flex-none">
                        <a href="{{ route('AsigTimElec.index') }}">
                            <div
                                class="relative group ease-in duration-100 dark:hover:bg-[#374a6250] flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                <div
                                    class="p-4 mx-6 mb-0 text-center border-b-0 border-b-solid  flex justify-center rounded-t-2xl border-b-transparent">
                                    <div
                                        class="w-20 h-20 group-transition ease-in duration-100 place-content-center flex group-hover:w-full p-2 text-center bg-center shadow-sm icon bg-gradient-to-tl from-blue-500 to-violet-500 rounded-xl">
                                        <div class="w-12 h-12 place-self-center">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="12px" y="12px"
                                                viewBox="0 0 256 256" enable-background="new 0 0 256 256"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fff"
                                                                d="M20.8,20.4v10.5l2.8,0.6c9.5,2,14.8,12.2,10.9,21.1c-2.1,4.7-6.7,8.3-11.6,9.1l-2.2,0.4v11.7v11.7H22c2.4,0,6.1,1.7,8.5,3.8c6,5.2,7.1,13.2,2.7,20c-2.2,3.5-5.7,5.7-11,6.8l-1.5,0.3V128v11.5l1.5,0.3c5.3,1.2,8.7,3.2,11,6.8c4.3,6.5,3.1,14.8-2.8,20.1c-2.4,2.1-6.1,3.8-8.5,3.8h-1.2v11.7v11.7l2.2,0.4c8.9,1.4,14.8,10.7,12.3,19.2c-1.6,5.6-6.1,9.8-11.6,11l-2.8,0.6v10.5V246h10.4h10.3l0.1-2.6c0.2-5.3,3.9-10.8,9-13.2c3.5-1.7,8.9-1.7,12.4-0.1c5.5,2.5,9.2,7.8,9.2,13.1v2.8h8.4h8.4v-2.3c0-5.5,3.8-11.2,9-13.5c3.7-1.6,9.1-1.7,12.5-0.1c5.2,2.3,9,7.9,9.1,13.1l0.1,2.8h8.4h8.4l0.1-2.8c0.1-5.2,3.9-10.8,9.1-13.1c3.7-1.7,8.9-1.6,12.7,0.3c5.3,2.6,8.8,7.9,8.8,13.3v2.3h8.4h8.4v-2.8c0.1-5.1,3.4-10.1,8.7-12.8c3.6-1.8,9.3-1.9,13-0.2c5.1,2.5,8.8,7.9,9,13.2l0.1,2.6h10.4h10.3v-10.4v-10.5l-2.8-0.6c-9.9-2-15.2-13-10.6-21.9c2.2-4.3,6.6-7.6,11.3-8.3l2.2-0.4v-11.7v-11.7H234c-2.4,0-6.1-1.7-8.5-3.8c-6-5.2-7.1-13.5-2.8-20.1c2.4-3.6,6-5.8,11.1-6.8l1.4-0.3V128v-11.5l-1.4-0.3c-7.1-1.6-11.3-5-13.1-11c-1-3.3-0.9-5.8,0.2-9.2c1.7-5.2,8.2-10.4,13.1-10.4h1.2V73.8V62.1l-2.2-0.4c-4.7-0.7-9.1-4-11.3-8.3c-4.6-8.9,0.7-19.8,10.6-22l2.8-0.6V20.4V10h-10.3h-10.4l-0.1,2.5c-0.3,7.8-7.3,14.5-15.4,14.5c-8.1,0-15.2-6.6-15.2-14.3V10h-8.3h-8.3l-0.2,3c-0.4,5.6-3.9,10.5-9.3,12.9c-3.3,1.5-8.9,1.5-12.2,0c-5.2-2.3-9-7.9-9.1-13.1l-0.1-2.8H128h-8.4l-0.1,2.9c-0.3,10.5-12.2,17.4-21.8,12.7c-5.2-2.6-8.8-7.9-8.8-13.3V10h-8.3h-8.3L72,13.4c-0.5,5.5-3.8,10-9.1,12.4c-3.8,1.7-9,1.6-12.6-0.2c-5.1-2.6-8.7-7.9-8.9-13L41.5,10H31.1H20.8V20.4z M210.6,128v90.7H128H45.4V128V37.3H128h82.6V128z" />
                                                            <path fill="#fff"
                                                                d="M123.5,68.3c-15,2.3-26.1,14.3-27.1,29.4c-1,15,9.5,29.3,24.1,32.7c10.9,2.6,21.9-0.6,29.8-8.6c6.7-6.7,9.8-14.9,9.2-24.2c-0.9-14.4-11.7-26.6-25.8-29.1C129.1,67.6,127.7,67.6,123.5,68.3z M134.9,84.2c3.7,1.7,6.6,4.4,8.3,8c1.3,2.6,1.5,3.7,1.5,7.2c0.1,3.5-0.2,4.7-1.3,7.1c-1.7,3.6-4.4,6.3-8,8.2c-2.4,1.3-3.3,1.5-7.4,1.5c-3.9,0-5.1-0.2-7.2-1.2c-3.4-1.7-6.6-4.9-8.2-8.4c-2-4.3-2-10.2,0.1-14.4C116.7,83.9,126.5,80.4,134.9,84.2z" />
                                                            <path fill="#fff"
                                                                d="M142.7,134.2c-3.9,0.4-5.6,1.4-7,4.4c-1.6,3.5-3.8,4.8-7.8,4.8c-3.9,0-5.6-1.1-7.6-4.8c-2.2-4-3.2-4.4-11.5-4.4c-8.3,0-11.4,0.6-17.8,3.8c-6,2.9-12.5,9.3-15.3,15.1c-3.3,6.7-3.8,9.4-3.8,20.5c0,9.2,0.1,9.8,1.2,11.3c2.5,3.5,0.2,3.4,55,3.4c54.8,0,52.4,0.2,55-3.4c1.1-1.5,1.2-2.4,1.3-8.9c0.4-15.5-2.7-24.2-11.4-32.5c-4-3.8-10.3-7.2-15.5-8.4C153.6,134.2,147,133.8,142.7,134.2z M111.5,151.7c8.6,8.6,24.4,8.6,33.1-0.1l2.7-2.7l3.7,0.2c10.6,0.7,19.4,11.1,18.6,22.1l-0.2,2.2H128H86.6l-0.2-2.2c-0.8-11.4,8.5-22,19.4-22.1C108.8,149,108.9,149,111.5,151.7z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                                <div class="flex-auto p-4 pt-0 text-center">
                                    <h6 class="mb-0 text-center dark:text-white">Timbre Fiscal electronico</h6>
                                    <hr
                                        class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                    <span class="text-xs leading-tight dark:text-white dark:opacity-80">Asignar</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Segunda card --}}
                    <div class="w-full max-w-full  md:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

                            <div class="flex flex-row w-full justify-around">
                                <div
                                    class="group  dark:hover:bg-[#374a6250] hover:bg-gray-200 w-full rounded-md transition ease-in duration-100">
                                    <a href="{{ route('AsigTimElec.index') }}">
                                        <div
                                            class="p-4 mx-6 mb-0 text-center border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                            <div
                                                class="w-16 h-16 group-hover:w-full text-center bg-center shadow-sm icon group-transition ease-in duration-100 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-xl">
                                                <i
                                                    class="relative text-xl leading-none text-white opacity-100 fas fa-landmark top-31/100"></i>
                                            </div>
                                        </div>
                                        <div class="flex-auto p-4 pt-0 text-center">
                                            <h6 class="mb-0 text-center dark:text-white">Timbre fiscal fisico</h6>
                                            <hr
                                                class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                            <span
                                                class="text-xs leading-tight dark:text-white dark:opacity-80">Asignar</span>
                                        </div>
                                    </a>
                                </div>
                                <hr
                                    class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                <div
                                    class="w-full group dark:hover:bg-[#374a6250] hover:bg-gray-200 rounded-md transition ease-in duration-100">
                                    <a href="{{ route('GenTimFis.index') }}">
                                        <div
                                            class="p-4 mx-6 mb-0 text-center border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                            <div
                                                class="child w-16 h-16 group-hover:w-full text-center group-transition ease-in duration-100 bg-center shadow-sm icon bg-gradient-to-tl from-blue-500 to-violet-500 rounded-xl">
                                                <i
                                                    class="relative text-xl leading-none text-white opacity-100 fas fa-landmark top-31/100"></i>
                                            </div>
                                        </div>
                                        <div class="flex-auto p-4 pt-0 text-center">
                                            <h6 class="mb-0 text-center dark:text-white">Generar Timbre fiscal</h6>
                                            <hr
                                                class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                            <span
                                                class="text-xs leading-tight dark:text-white dark:opacity-80">Imprimir</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-6 Smd:flex-none">
                <livewire:TimbresFiscales.LastTimbresTable>
            </div>
            {{-- <div class="w-full max-w-full px-3 mt-6 md:w-5/12 md:flex-none">
                <div
                    class="relative flex flex-col h-full min-w-0 mb-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                                <h6 class="mb-0 dark:text-white">Your Transactions</h6>
                            </div>
                            <div
                                class="flex items-center justify-end max-w-full px-3 dark:text-white/80 md:w-1/2 md:flex-none">
                                <i class="mr-2 far fa-calendar-alt"></i>
                                <small>23 - 30 March 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        <h6 class="mb-4 text-xs font-bold leading-tight uppercase dark:text-white text-slate-500">Newest
                        </h6>
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-red-600 border-transparent bg-transparent text-center align-middle font-bold uppercase text-red-600 transition-all hover:opacity-75"><i
                                            class="fas fa-arrow-down text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">Netflix
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80">27 March 2020, at 12:30
                                            PM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-red-600 to-orange-600 bg-clip-text">
                                        - $ 2,500</p>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 border-t-0 rounded-b-inherit text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-emerald-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-emerald-500 transition-all hover:opacity-75"><i
                                            class="fas fa-arrow-up text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">Apple
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80">27 March 2020, at 04:30
                                            AM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text">
                                        + $ 2,000</p>
                                </div>
                            </li>
                        </ul>
                        <h6 class="my-4 text-xs font-bold leading-tight uppercase dark:text-white text-slate-500">
                            Yesterday</h6>
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-emerald-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-emerald-500 transition-all hover:opacity-75"><i
                                            class="fas fa-arrow-up text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">Stripe
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80">26 March 2020, at 13:45
                                            PM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text">
                                        + $ 750</p>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 border-t-0 text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-emerald-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-emerald-500 transition-all hover:opacity-75"><i
                                            class="fas fa-arrow-up text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">HubSpot
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80">26 March 2020, at 12:30
                                            PM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text">
                                        + $ 1,000</p>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 border-t-0 text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-emerald-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-emerald-500 transition-all hover:opacity-75"><i
                                            class="fas fa-arrow-up text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">Creative
                                            Tim</h6>
                                        <span class="text-xs leading-tight dark:text-white/80">26 March 2020, at 08:30
                                            AM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 items-center inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text">
                                        + $ 2,500</p>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 border-t-0 rounded-b-inherit text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-slate-700 border-transparent bg-transparent text-center align-middle font-bold uppercase text-slate-700 transition-all hover:opacity-75"><i
                                            class="fas fa-exclamation text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">Webflow
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80">26 March 2020, at 05:00
                                            AM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="flex items-center m-0 text-sm font-semibold leading-normal text-slate-700">
                                        Pending</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>


    </div>

</div>
