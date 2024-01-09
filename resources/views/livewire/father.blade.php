<div>
    @persist('player')
        <audio src="{{ asset('audios/sky.flac') }}" controls></audio>
    @endpersist()
    <x-primary-button wire:click='redirigir'>
        Ir a prueba
    </x-primary-button>

    <h1 class="text-2xl font-semibold">Soy el componente father</h1>

    <x-text-input wire:model.live='name' />

    <hr class="my-6">

    <livewire:children :name="$name">

    @push('js')
        <script></script>
    @endpush

</div>
