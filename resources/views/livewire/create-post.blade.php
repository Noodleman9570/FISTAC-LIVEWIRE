<div>
    <x-input-label>Ingrese su nombre</x-input-label>
    <x-text-input wire:model="name"></x-text-input>

    <x-primary-button wire:click="save">
        Save
    </x-primary-button>
    <br />
    {{ $name }}
</div>