@props(['id', 'min', 'max', 'step', 'value', 'name', 'event' => null])

<div x-data="{val: 0}" {!! $event ? $event . '="val = 0"' : '' !!}>
    <input id="{{ $id }}" type="range" min="{{ $min }}" max="{{ $max }}" value="{{ $value }}" step="{{ $step }}" {{ $attributes->merge(['class' => 'w-full h-3 bg-gray-200 rounded-lg appearance-none cursor-pointer range-lg dark:bg-gray-700']) }} {{ $attributes->whereStartsWith('wire:model') }} x-model="val" name="{{ $name }}">
    <p><span x-text="val"></span> {{ $slot }}</p>
</div>