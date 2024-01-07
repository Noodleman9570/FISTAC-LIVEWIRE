<div>

    <x-primary-button class="mb-2" wire:click="$toggle('open')">
        Mostrar / Ocultar
    </x-primary-button>

    <form class="mb-4" wire:submit="save">
        <x-text-input 
        wire:model='pais' 
        placeholder='Ingresa un país'
        wire:keydown='increment'
        />

        <x-primary-button>
            Agregar
        </x-primary-button>
    </form>

    @if ($open)
    
    <ul class="list-disc list-inside space-y-4 w-60">
        @foreach ($paises as $index => $pais)
        <div class="flex gap-4 justify-between">
            <li wire:key="pais-{{ $index }}">
                <span wire:mouseenter="changeActive('{{ $pais }}')">
                    ({{ $index }}) {{ $pais }}
                </span>
            </li>
            <x-danger-button wire:click='delete({{ $index }})'>x</x-danger-button>
        </div>
        @endforeach
    </ul>
    
    @endif

</div>
                        