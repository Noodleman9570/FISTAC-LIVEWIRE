<div>
    {{-- Formulario Contribuyente --}}
    <form>
        <div class="flex flex-wrap -mx-3">
            {{-- Cedula --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">

                    <x-input-label>
                        Cedula:
                    </x-input-label>
                    <div class="flex mb-4">
                        <span class="mr-2">
                            <x-select class="w-20" x-data x-on:change="$dispatch('selectChanged')"
                                wire:model="contribuyenteCreate.prefijo">
                                <option value="" disabled>
                                    ...
                                </option>
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="J">J</option>
                                <option value="G">G</option>
                            </x-select>
                            
                        </span>

                        <div class="column w-full">
                            <x-text-input class="w-full mb-2" wire:model="contribuyenteCreate.cedula"
                                wire:keydown='contribSearch'></x-text-input>
                                <x-input-error-jet for="contribuyenteCreate.cedula" />
                        </div>
                        

                    </div>

                </div>
            </div>
            {{-- Nombre input --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Nombre:
                        </x-input-label>

                        <x-text-input class="w-full mb-2" wire:model="contribuyenteCreate.nombre"
                            :disabled="$disabled" ></x-text-input>

                            <x-input-error-jet for="contribuyenteCreate.nombre" />
                    </span>
                </div>
            </div>
            {{-- Segundo nombre input --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Segundo nombre:
                        </x-input-label>

                        <x-text-input class="w-full mb-2" :disabled="$disabled"
                            wire:model="contribuyenteCreate.nombre2nd"></x-text-input>
                            <x-input-error-jet for="contribuyenteCreate.nombre2nd" />
                    </span>
                </div>
            </div>
            {{-- Telefono input --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Telefono:
                        </x-input-label>

                        <x-text-input class="w-full mb-2" :disabled="$disabled"
                            wire:model="contribuyenteCreate.telefono"></x-text-input>
                        <x-input-error-jet for="contribuyenteCreate.telefono" />
                    </span>
                </div>
            </div>
            {{-- Fecha de nacimiento --}}
            <div class="w-full max-w-full md:w-1/4 px-3 shrink-0 md:flex-0">
                <div class="mb-4">
                    <x-input-label>
                        Fecha de nacimiento:
                    </x-input-label>

                    <x-text-input type='date' class="w-full mb-2" :disabled="$disabled"
                            wire:model="contribuyenteCreate.fecha_nac"></x-text-input>
                    <x-input-error-jet for="contribuyenteCreate.fecha_nac" />
                </div>
            </div>
            {{-- Apellido input --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Apellido:
                        </x-input-label>

                        <x-text-input class="w-full mb-2" :disabled="$disabled"
                            wire:model="contribuyenteCreate.apellido"></x-text-input>
                            <x-input-error-jet for="contribuyenteCreate.apellido" />
                    </span>
                </div>
            </div>
            {{-- Segundo apellido input --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Segundo apellido:
                        </x-input-label>

                        <x-text-input class="w-full mb-2" :disabled="$disabled"
                            wire:model="contribuyenteCreate.apellido2nd"></x-text-input>
                            <x-input-error-jet for="contribuyenteCreate.apellido2nd" />
                    </span>
                </div>
            </div>
            
            {{-- Direccion --}}
            <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                <div class="mb-4">
                    <x-input-label>
                        Direccion:
                    </x-input-label>

                    <x-textarea class="w-full mb-2" :disabled="$disabled"
                        wire:model="contribuyenteCreate.direccion"></x-textarea>
                    <x-input-error-jet for="contribuyenteCreate.direccion" />
                </div>
            </div>
        </div>
    </form>
</div>
