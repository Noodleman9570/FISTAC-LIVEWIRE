<div class="flex flex-col gap-6 text-white">

    <div class="shadow-md bg-white dark:bg-[#1f2937] text-black dark:text-white rounded-lg p-6">

        <div x-data="{ open: false }">

            <button @click="open = true">Open Dropdown</button>
          
            <ul x-show="open" @click.away="open = false">
              <li>Item 1</li>
              <li>Item 2</li>
            </ul>
          
          </div>

        <form wire:submit='save'>
            <div class="mb-4">
                <x-input-label>
                    Nombre:
                </x-input-label>
                <x-text-input class="w-full" wire:model.live="postCreate.title"></x-text-input>

                <x-input-error-jet for="postCreate.title" />

            </div>

            <div class="mb-4">
                <x-input-label>
                    Contenido:
                </x-input-label>

                <x-textarea class="w-full" wire:model.live="postCreate.content"></x-textarea>
                <x-input-error-jet for="postCreate.content" />
            </div>

            <div class="mb-4">
                <x-input-label>
                    Categoria:
                </x-input-label>
                <x-select class="w-full" wire:model.live="postCreate.category_id">
                    <option value="" disabled>
                        Selecciona una categoria
                    </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">

                            {{ $category->name }}

                        </option>
                    @endforeach
                </x-select>
                <x-input-error-jet for="postCreate.category_id" />
            </div>

            <div class="mb-4">
                <x-input-label>
                    Etiquetas:
                </x-input-label>
                <ul>
                    @foreach ($tags as $tag)
                        <li>
                            <label>
                                <x-checkbox wire:model.live="postCreate.tags" label="{{ $tag->name }}"
                                    value="{{ $tag->id }}" />
                                {{ $tag->name }}
                            </label>
                        </li>
                    @endforeach
                </ul>
                <x-input-error-jet for="postCreate.tags" />
            </div>

            <div class="flex justify-end">
                <x-primary-button>
                    Crear
                </x-primary-button>
            </div>

        </form>
      

    </div>


    <div class="mt-3 shadow bg-white dark:bg-[#1f2937] rounded-lg p-6">
        <ul class="list-disc list-inside space-y-2">

            @foreach ($posts as $post)
                <li class="flex justify-between" wire:key="post-{{ $post->id }}">
                    {{ $post->title }}
                    <div>
                        <x-primary-button wire:click='edit({{ $post->id }})'>
                            Editar
                        </x-primary-button>

                        <x-danger-button wire:click='destroy({{ $post->id }})'>
                            Eliminar
                        </x-danger-button>
                    </div>

                </li>
            @endforeach

        </ul>
    </div>


    <form wire:submit='update'>
        <x-dialog-modal wire:model="postEdit.open">
            <x-slot name="title">
                Actualizar post
            </x-slot>
            <x-slot name="content">
                <div class="mb-4">
                    <x-input-label>
                        Nombre:
                    </x-input-label>
                    <x-text-input class="w-full" wire:model="postEdit.title"></x-text-input>
                    <x-input-error-jet for="postEdit.title" />
                </div>

                <div class="mb-4">
                    <x-input-label>
                        Contenido:
                    </x-input-label>

                    <x-textarea class="w-full" wire:model="postEdit.content"></x-textarea>
                    <x-input-error-jet for="postEdit.content" />
                </div>

                <div class="mb-4">
                    <x-input-label>
                        Categoria:
                    </x-input-label>
                    <x-select class="w-full" wire:model="postEdit.category_id">
                        <option value="" disabled>
                            Selecciona una categoria
                        </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">

                                {{ $category->name }}

                            </option>
                        @endforeach
                    </x-select>
                    <x-input-error-jet for="postEdit.category_id" />
                </div>

                <div class="mb-4">
                    <x-input-label>
                        Etiquetas:
                    </x-input-label>
                    <ul>
                        @foreach ($tags as $tag)
                            <li>
                                <label>
                                    <x-checkbox wire:model="postEdit.tags" label="{{ $tag->name }}"
                                        value="{{ $tag->id }}" />
                                    {{ $tag->name }}
                                </label>
                            </li>
                        @endforeach
                    </ul>
                    <x-input-error-jet for="postEdit.tags" />
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

    

    @push('js')
        <script>
            Livewire.on('post-action', function(comment) {
                console.log(comment[0]);
            });

            console.log(Alpine.version)
        </script>

        
    @endpush



</div>
