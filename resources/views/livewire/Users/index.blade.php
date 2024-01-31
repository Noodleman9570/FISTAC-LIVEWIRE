<div>

    <div class="pt-12 xl:pl-[10rem]">
        <div
            class="md:w-[70vw]  bg-white dark:bg-[#111827] p-4 rounded-lg mx-auto sm:px-6 lg:px-8 text-black dark:text-white">

            <x-primary-button wire:click='create' class="mb-4">
                Agregar Usuario
            </x-primary-button>

            <livewire:Users.Users-table />

            <form wire:submit='save'>
                <x-dialog-modal wire:model="userCreate.open">
                    <x-slot name="title">
                        Agregar Usuario
                    </x-slot>

                    <x-slot name="content">

                        <div class="flex justify-between">
                            <div class="mb-4 w-full mr-2">
                                <x-input-label>
                                    Nombre:
                                </x-input-label>
                                <x-text-input class="w-full" wire:model.live="userCreate.name"></x-text-input>
                                <x-input-error-jet for="userCreate.name" />
                            </div>

                            <!-- Rol_id -->
                            <div class="mb-4 w-full ml-2">
                                <x-input-label for="rol_id" :value="__('Rol')" />
                                <x-select class="w-full" wire:model.live="userCreate.role_id" id="rol_id">
                                    <option value="" selected disabled>
                                        Seleccione un rol
                                    </option>
                                    @forelse($userCreate->roles as $rol)
                                        <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                                    @empty
                                        No hay registros
                                    @endforelse
                                </x-select>
                                <x-input-error-jet for="userCreate.role_id" />
                            </div>
                        </div>
                        

                        <!-- Email Address -->
                        <div class="mb-4">
                            <div class="flex">
                                <span class="w-full">
                                    <x-input-label>
                                        Email:
                                    </x-input-label>
                                    <x-text-input class="w-full" wire:model.live="userCreate.email"></x-text-input>
                                </span>
                            </div>
                            <x-input-error-jet for="userCreate.email" />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <div class="flex">
                                <span class="w-full">
                                    <x-input-label>
                                        Contraseña:
                                    </x-input-label>
                                    <x-text-input type='password' class="w-full" wire:model.live="userCreate.password"></x-text-input>
                                </span>
                            </div>
                            <x-input-error-jet for="userCreate.password" />
                        </div>

                        <!-- Confirmed password -->
                        <div class="mb-4">
                            <div class="flex">
                                <span class="w-full">
                                    <x-input-label>
                                        Confirmar contraseña:
                                    </x-input-label>
                                    <x-text-input class="w-full" type='password' wire:model.live="userCreate.password_confirmation"></x-text-input>
                                </span>
                            </div>
                            <x-input-error-jet for="userCreate.password_confirmation" />
                        </div>

                    </x-slot>

                    <x-slot name="footer">
                        <div class="flex justify-end">
                            <x-danger-button class="mr-2" wire:click="$set('userCreate.open', false)">
                                Cancelar
                            </x-danger-button>
                            <x-primary-button>
                                Crear
                            </x-primary-button>
                        </div>
                    </x-slot>
                </x-dialog-modal>
            </form>

        </div>
    </div>

</div>
