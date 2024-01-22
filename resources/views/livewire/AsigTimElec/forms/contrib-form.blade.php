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
                            <x-text-input class="w-full" wire:model="contribuyenteCreate.cedula"
                                wire:keydown='contribSearch'></x-text-input>
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

                        <x-text-input class="w-full" wire:model="contribuyenteCreate.nombre"
                            :disabled="$disabled" wire:keydown='contribSearch'></x-text-input>


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

                        <x-text-input class="w-full" :disabled="$disabled"
                            wire:model="contribuyenteCreate.nombre2nd"></x-text-input>

                    </span>
                </div>
            </div>
            {{-- Telefono input --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Telefono:
                        </x-input-label>

                        <x-text-input class="w-full" :disabled="$disabled"
                            wire:model="contribuyenteCreate.telefono"></x-text-input>

                    </span>
                </div>
            </div>
            {{-- Apellido input --}}
            <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Apellido:
                        </x-input-label>

                        <x-text-input class="w-full" :disabled="$disabled"
                            wire:model="contribuyenteCreate.apellido"></x-text-input>

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

                        <x-text-input class="w-full" :disabled="$disabled"
                            wire:model="contribuyenteCreate.apellido2nd"></x-text-input>

                    </span>
                </div>
            </div>
            {{-- Direccion --}}
            <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                <div class="mb-4">
                    <x-input-label>
                        Direccion:
                    </x-input-label>

                    <x-textarea class="w-full" :disabled="$disabled"
                        wire:model="contribuyenteCreate.direccion"></x-textarea>
                    <x-input-error-jet for="contribuyenteCreate.direccion" />
                </div>
            </div>
        </div>
    </form>
</div>
