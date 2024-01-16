<div>
    <div class="pt-12">
        <div
            class="max-w-[70vw] bg-white dark:bg-[#111827] p-4 rounded-lg mx-auto sm:px-6 lg:px-8 text-black dark:text-white">
            <x-primary-button wire:click='create' class="mb-4">
                Agregar Contribuyente
            </x-primary-button>

            <livewire:Contribuyentes.Contribuyente-table />

            <form wire:submit='create'>
                <x-dialog-modal wire:model="contribuyenteCreate.open">
                    <x-slot name="title">
                        Agregar Contribuyente
                    </x-slot>

                    <x-slot name="content">

                        <x-input-label>
                            Cedula:
                        </x-input-label>
                        <div class="flex mb-4">
                            <span class="mr-2">
                                <x-select class="w-20" wire:model="contribuyenteCreate.prefijo">
                                    <option value="" disabled>
                                        Selecciona una categoria
                                    </option>
                                    <option value="V">V</option>
                                    <option value="E">E</option>
                                    <option value="J">J</option>
                                    <option value="G">G</option>
                                </x-select>
                                <x-input-error-jet for="contribuyenteCreate.prefijo" />
                            </span>
                            
                            <x-text-input class="w-full" wire:model="contribuyenteCreate.cedula"></x-text-input>
                            <x-input-error-jet for="contribuyenteCreate.cedula" />                        
                        </div>

                        <div class="flex mb-4">
                            <span class="w-full mr-2">
                                <x-input-label>
                                    Nombre:
                                </x-input-label>

                                <x-text-input class="w-full" wire:model="contribuyenteCreate.nombre1st"></x-text-input>
                                <x-input-error-jet for="contribuyenteCreate.nombre1st" />

                            </span>

                            <span class="w-full">
                                <x-input-label  class="flex items-center mb-4">
                                    Segundo nombre:
                                </x-input-label>

                                <div class="flex -mt-4">
                                    <x-input-error-jet for="contribuyenteCreate.nombre2nd" />
                                    <x-text-input class="w-full" wire:model="contribuyenteCreate.nombre2nd"></x-text-input>
                                    <span data-tooltip-target="tooltip-nombre">
                                        <input id="default-checkbox" type="checkbox" value="" class="w-10 h-10 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </span>
                                </div>
                                <div id="tooltip-nombre" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Si precionas este boton es porque no tiene segundo nombre
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </span>         
                        </div>


                        <div class="flex mb-4">
                            <span class="w-full mr-2">
                                <x-input-label>
                                    Apellido:
                                </x-input-label>
                                <x-text-input class="w-full" wire:model="contribuyenteCreate.nombre1st"></x-text-input>
                                <x-input-error-jet for="contribuyenteCreate.nombre1st" />

                            </span>

                            <span class="w-full">
                                <x-input-label  class="flex items-center mb-4">
                                    Segundo apellido:
                                </x-input-label>

                                <div class="flex -mt-4">
                                    <x-input-error-jet for="contribuyenteCreate.nombre2nd" />
                                    <x-text-input class="w-full" wire:model="contribuyenteCreate.nombre2nd"></x-text-input>
                                    <span data-tooltip-target="tooltip-apellido">
                                        <input id="default-checkbox" type="checkbox" value="" class="w-10 h-10 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </span>
                                </div>
                                <div id="tooltip-apellido" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Si precionas este boton es porque no tiene segundo apellido
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </span>                 
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                Apellido:
                            </x-input-label>
            
                            <x-text-input class="w-full" wire:model="contribuyenteCreate.apellido1st"></x-text-input>
                            <x-input-error-jet for="contribuyenteCreate.apellido1st" />
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                Segundo apellido:
                            </x-input-label>
            
                            <x-text-input class="w-full" wire:model="contribuyenteCreate.apellido2nd"></x-text-input>
                            <x-input-error-jet for="contribuyenteCreate.apellido2nd" />
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                Direccion:
                            </x-input-label>
            
                            <x-textarea class="w-full" wire:model="contribuyenteCreate.direccion"></x-textarea>
                            <x-input-error-jet for="contribuyenteCreate.direccion" />
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                Telefono:
                            </x-input-label>
            
                            <x-text-input class="w-full" wire:model="contribuyenteCreate.telefono"></x-text-input>
                            <x-input-error-jet for="contribuyenteCreate.telefono" />
                        </div>
            
                    </x-slot>
                    <x-slot name="footer">
                        <div class="flex justify-end">
                            <x-danger-button class="mr-2" wire:click="$set('postEdit.open', false)">
                                Cancelar
                            </x-danger-button>
                            <x-primary-button>
                                Actualizar
                            </x-primary-button>
                        </div>
                    </x-slot>
                </x-dialog-modal>
            </form>

        </div>
    </div>
</div>
