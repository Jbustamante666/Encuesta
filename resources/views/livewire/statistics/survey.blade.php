<div class="container mx-auto mt-10">
    <ul class="ml-4 flex flex-col sm:flex-row justify-center items-center gap-4">
        <li><button class="p-2 bg-blue-600 rounded-md border hover:bg-blue-800 text-white" wire:click="change(1)">Total de encuestas respondias</button></li>
        <li><button class="p-2 bg-blue-600 rounded-md border hover:bg-blue-800 text-white" wire:click="change(2)">Tiempo promedio por red social</button></li>
        <li><button class="p-2 bg-blue-600 rounded-md border hover:bg-blue-800 text-white" wire:click="change(3)">Red social favorita</button></li>
        <li><button class="p-2 bg-blue-600 rounded-md border hover:bg-blue-800 text-white" wire:click="change(4)">Red social menos querida</button></li>
        <li><button class="p-2 bg-blue-600 rounded-md border hover:bg-blue-800 text-white" wire:click="change(5)">Rango de edad que más use cada red social</button></li>
    </ul>

    @if ($option == 1)
    @livewire('statistics.completed-surveys')
    @elseif ($option == 2)
    @livewire('statistics.average-time')
    @elseif ($option == 3)
    @livewire('statistics.favorite-rrss')
    @elseif ($option == 4)
    @livewire('statistics.rrss-least-favorite')
    @elseif ($option == 5)
    @livewire('statistics.age-range')
    @endif
</div>