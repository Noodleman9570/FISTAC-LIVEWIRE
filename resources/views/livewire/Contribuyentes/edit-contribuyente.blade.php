<div>

    <form class="p-4 dark:bg-gray-800 dark:text-white text-black" wire:submit='update'>
        <div class="text-center">
            Agregar Contribuyente
        </div>
        <div class="mb-4">
            <x-input-label>
                Cedula:
            </x-input-label>

            <div class="flex mb-4">
                <span class="mr-2">
                    <x-select wire:model='contribuyenteEdit.prefijo' class="w-20">
                        <option value="">
                            ...
                        </option>

                        <option value="V">
                            V
                        </option>


                        <option value="E">
                            E
                        </option>


                        <option value="J">
                            J
                        </option>


                        <option value="G">
                            G
                        </option>
                    </x-select>
                </span>

                <div class="column w-full">
                    <x-text-input class="w-full" wire:model='contribuyenteEdit.cedula'></x-text-input>
                </div>

            </div>
            <x-input-error-jet for="contribuyenteEdit.prefijo" />
            <x-input-error-jet for="contribuyenteEdit.cedula" />



            <div class="flex mb-4">
                <span class="w-full mr-2">
                    <x-input-label>
                        Nombre:
                    </x-input-label>

                    <x-text-input class="w-full" wire:model='contribuyenteEdit.nombre'></x-text-input>

                </span>

                <span class="w-full">
                    <x-input-label class="flex items-center mb-4">
                        Segundo nombre:
                    </x-input-label>

                    <div class="flex -mt-4">
                        <x-text-input class="w-full" wire:model='contribuyenteEdit.nombre2nd'></x-text-input>
                        <label data-tooltip-target="tooltip-nombre" for="nombre-checkbox"
                            class="relative cursor-pointer">
                            <input id="default-checkbox" name="nombre-checkbox" type="checkbox"
                                class=" checkbox-x w-10 h-10 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <i
                                class="bi bi-x-lg checkbox-icon hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-red-600 text-white"></i>
                        </label>
                    </div>
                    <div id="tooltip-nombre" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Si precionas este boton es porque no tiene segundo nombre
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </span>
            </div>
            <x-input-error-jet for="contribuyenteEdit.nombre2nd" />
            <x-input-error-jet for="contribuyenteEdit.nombre" />

            <div class="mb-4">
                <div class="flex">
                    <span class="w-full mr-2">
                        <x-input-label>
                            Apellido:
                        </x-input-label>
                        <x-text-input class="w-full" wire:model='contribuyenteEdit.apellido'></x-text-input>


                    </span>

                    <span class="w-full">
                        <x-input-label class="flex items-center mb-4">
                            Segundo apellido:
                        </x-input-label>

                        <div class="flex -mt-4">
                            <x-text-input class="w-full" wire:model='contribuyenteEdit.apellido2nd'></x-text-input>
                            <label data-tooltip-target="tooltip-apellido" for="apellido-checkbox"
                                class="relative cursor-pointer">
                                <input id="default-checkbox" name="apellido-checkbox" type="checkbox"
                                    class=" checkbox-x w-10 h-10 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <i
                                    class="bi bi-x-lg checkbox-icon hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-red-600 text-white"></i>
                            </label>
                        </div>
                        <div id="tooltip-apellido" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Si precionas este boton es porque no tiene segundo apellido
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </span>
                </div>

            </div>

            <x-input-error-jet for="contribuyenteEdit.apellido" />
            <x-input-error-jet class="w-full" for="contribuyenteEdit.apellido2nd" />

            <div class="mb-4">
                <x-input-label>
                    Direccion:
                </x-input-label>

                <x-textarea class="w-full" wire:model='contribuyenteEdit.direccion'></x-textarea>
                <x-input-error-jet for="contribuyenteEdit.direccion" />
            </div>

            <div class="mb-4">
                <x-input-label>
                    Telefono:
                </x-input-label>

                <x-text-input class="w-full" wire:model='contribuyenteEdit.telefono'></x-text-input>
                <x-input-error-jet for="contribuyenteEdit.telefono" />
            </div>



            <div class="flex justify-end">
                <x-danger-button class="mr-2" wire:click="close">
                    Cancelar
                </x-danger-button>
                <x-primary-button>
                    Actualizar
                </x-primary-button>
            </div>

    </form>

</div>
