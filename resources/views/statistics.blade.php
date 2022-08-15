<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Estadisticas') }}
            </h2>
        </div>
    </x-slot>

    @livewire('statistics.survey')
</x-app-layout>