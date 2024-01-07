<div class="flex flex-col gap-6 ">

    <div class="pt-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="shadow-md rounded-lg p-6">

                    <form wire:submit='save'>
                        <div class="mb-4">
                            <x-input-label>
                                Nombre:
                            </x-input-label>
                            <x-text-input class="w-full" wire:model="title" required></x-text-input>
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                Contenido:
                            </x-input-label>

                            <x-textarea class="w-full" wire:model="content" required></x-textarea>
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                Categoria:
                            </x-input-label>
                            <x-select class="w-full" wire:model="category_id" required>
                                <option value="" disabled>
                                    Selecciona una categoria
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">

                                        {{ $category->name }}

                                    </option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                Etiquetas:
                            </x-input-label>
                            <ul>
                                @foreach ($tags as $tag)
                                    <li>
                                        <label>
                                            <x-checkbox wire:model="selectedTags" label="{{ $tag->name }}"
                                                value="{{ $tag->id }}" />
                                            {{ $tag->name }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>
                                Crear
                            </x-primary-button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



    <div class="">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="mt-3 shadow rounded-lg p-6">
                    <ul class="list-disc list-inside space-y-2">

                        @foreach ($posts as $post)
                            <li class="flex justify-between">
                                {{ $post->title }}
                                <div>
                                    <x-primary-button>
                                        Editar
                                    </x-primary-button>
                                    
                                    <x-danger-button>
                                        Eliminar
                                    </x-danger-button>
                                </div>

                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-gray-800 opacity-25 fixed">
            
        </div>
    </div>




</div>
