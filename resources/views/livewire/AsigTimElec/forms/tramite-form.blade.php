<div>
    {{-- Datos del tramite --}}
    <div class="flex flex-wrap -mx-3">

        <div class="w-full max-w-full px-3 shrink-0 md:w-1/3 md:flex-0">
            <div class="mb-4">

                <div class="mb-4">

                    <x-input-label>
                        Categoria:
                    </x-input-label>
                    <div class="mb-4">
                        <span class="mr-2">
                            <x-select class="w-full" x-data x-on:change="$dispatch('changeCateg')"
                                wire:model.live="selectedCategoria">
                                <option value="" disabled selected>
                                    ...
                                </option>
                                @forelse ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @empty
                                    <option value="">no hay registros</option>
                                @endforelse
                            </x-select>
                        </span>

                    </div>
                </div>

            </div>
        </div>
        <div class="w-full max-w-full px-3 shrink-0 md:w-1/3 md:flex-0">
            <div class="mb-4">

                <div class="mb-4">

                    <x-input-label>
                        Concepto Tributos:
                    </x-input-label>
                    <div class="mb-4">
                        <span class="mr-2">
                            <x-select class="w-full" 
                                wire:model.live="selectedConcepTributos">
                                <option value="" disabled>
                                    ...
                                </option>
                                @forelse ($concep_tributos as $concept_tributo)
                                    <option value="{{ $concept_tributo->id }}">{{ $concept_tributo->nombre }}</option>
                                @empty
                                    <option value="">...</option>
                                @endforelse
                            </x-select>
                        </span>

                    </div>
                </div>

            </div>
        </div>
        <div class="w-full max-w-full px-3 shrink-0 md:w-1/3 md:flex-0">
            <div class="mb-4">

                <div class="mb-4">

                    <x-input-label>
                        Ente Trámite:
                    </x-input-label>
                    <div class="mb-4">
                        <span class="mr-2">
                            <x-select class="w-full" 
                                wire:model.live="selectedEnteTramite"> 
                                <option value="0" disabled selected>
                                    ...
                                </option>
                                @forelse ($ente_tramites as $ente_tramite)
                                    <option value="{{ $ente_tramite->id }}">{{ $ente_tramite->nombre }}</option>
                                @empty
                                    <option value="">...</option>
                                @endforelse
                            </x-select>
                        </span>

                    </div>
                </div>
                
            </div>
        </div>
        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
            <x-input-error-jet for="ente_tramite_id" class="w-full" />
        </div>
        
        
        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
            <div class="mb-4">
                <div class="mx-auto  max-w-xs  mt-2">
                    <dt class="text-base text-center text-gray-300">Total unidades tributarias</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-center text-white sm:text-2xl">{{ $totalUt }}</dd>
                </div>
            </div>
        </div>
        {{-- <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
            <div class="mb-4">
                <label for="country"
                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                <input type="text" name="country" value="United States"
                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
            </div>
        </div>
        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
            <div class="mb-4">
                <label for="postal code"
                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal
                    code</label>
                <input type="text" name="postal code" value="437300"
                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
            </div>
        </div> --}}
    </div>
</div>
