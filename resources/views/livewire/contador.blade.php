<div>



    <x-primary-button wire:click="decrement(1)">
        -
    </x-primary-button>

    <span class="mx-2">
        {{ $count }}
    </span>

    <x-primary-button wire:click="increment(1)">
        +
    </x-primary-button>
</div>
