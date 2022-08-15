@props(['name', 'id'])

<select id="{{ $id}}" {{ $attributes->merge(['class' => 'block py-3 px-4 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) }} {{ $attributes->whereStartsWith('wire:model') }} name="{{ $name }}">
    <option value="" selected>Seleccione una opción</option>
    {{ $slot }}
</select>