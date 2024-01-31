<div>
    <form class="p-4 dark:bg-gray-800 dark:text-white text-black" wire:submit='update'>
        <div class="text-start">
            Editar Contribuyente
        </div>


        <div class=" my-4">

            <div class="flex justify-between">
                <div class="mb-4 w-full mr-2">
                    <x-input-label>
                        Nombre:
                    </x-input-label>
                    <x-text-input class="w-full" wire:model.live="userEdit.name"></x-text-input>
                    <x-input-error-jet for="userEdit.name" />
                </div>

                <!-- Rol_id -->
                <div class="mb-4 w-full ml-2">
                    <x-input-label for="rol_id" :value="__('Rol')" />
                    <x-select class="w-full" wire:model.live="userEdit.role_id" id="rol_id">
                        <option value="" selected disabled>
                            Seleccione un rol
                        </option>
                        @forelse($userEdit->roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                        @empty
                            No hay registros
                        @endforelse
                    </x-select>
                    <x-input-error-jet for="userEdit.role_id" />
                </div>
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <div class="flex">
                    <span class="w-full">
                        <x-input-label>
                            Email:
                        </x-input-label>
                        <x-text-input class="w-full" wire:model.live="userEdit.email"></x-text-input>
                    </span>
                </div>
                <x-input-error-jet for="userEdit.email" />
            </div>

            <div class="flex justify-end">
                <x-danger-button class="mr-2" wire:click="close">
                    Cancelar
                </x-danger-button>
                <x-primary-button>
                    Actualizar
                </x-primary-button>
            </div>
        </div>
    </form>
</div>
