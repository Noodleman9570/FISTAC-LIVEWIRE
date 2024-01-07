<div>

    <x-text-input wire:model="cant">

    </x-text-input>

    <x-primary-button wire:click="edit">
        Save
    </x-primary-button>

    <x-primary-button wire:click="decrement()">
        -{{ $cant }}
    </x-primary-button>

    <span class="mx-2">
        {{ $cant }}
    </span>

    <x-primary-button wire:click="increment()">
        +{{ $cant }}
    </x-primary-button>
</div>
