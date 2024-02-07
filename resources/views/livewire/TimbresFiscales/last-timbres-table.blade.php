<div>
    <div
        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 border-b-0 rounded-t-2xl px-10 flex justify-between">
            <h6 class="mb-0 dark:text-white">Ultimos Timbres</h6>
            <a href="" class="text-gray-400">Ver todos los timbres <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="flex-auto p-4 pt-6">
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">

                @foreach ($timbres as $timbre)
                    <li
                        class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                        <div class="flex flex-col ">
                            <h6 class="mb-4 text-2xl leading-normal dark:text-white">{{ $timbre->cedula }}</h6>
                            <span class="mb-2 text-md leading-tight dark:text-white/80">Nombre: <span
                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $timbre->nombre }}</span></span>
                            <span class="mb-2 text-md leading-tight dark:text-white/80">Apellido: <span
                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $timbre->apellido }}</span></span>
                            <span class="text-md leading-tight dark:text-white/80">UTET: <span
                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $timbre->cant_ut }}</span></span>

                        </div>
                        <div class="ml-auto text-right flex flex-col gap-4 -mt-4">
                            <img src="{{ $timbre->tipo == 'electronico' ? asset('storage/Timbre_Electronico/electronico.jpeg') : asset('storage/Timbres_Fisicos/' . $timbre->cant_ut . '_utet.jpeg') }}"
                                class="img-fluid mx-auto w-30 rounded-top" alt="" />
                            <div class="flex">

                                <div>
                                    <h3 class="text-white text-center">Codigo</h3>
                                    <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text"
                                        href="javascript:;">{{ $timbre->codigo }}</a>
                                </div>
                                <div>
                                    <h3 class="text-white text-center">Fecha</h3>
                                    <a class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700"
                                        href="javascript:;">{{ $timbre->tipo == 'electronico' ? $timbre->created_at : $timbre->updated_at }}</a>
                                </div>
                            </div>


                        </div>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

                    </li>

                @endforeach

            </ul>
        </div>
    </div>
</div>
