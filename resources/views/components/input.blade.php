@props([
    'noMargin' => false
])

<div class="{{ !$noMargin ? 'mb-6' : '' }}">
    <input name="{{ $name }}" id="{{ $id ?? $name }}"
            {{ $attributes->merge(["class" => "
            bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
            focus:ring-blue-500 focus:border-blue-500
            disabled:blur-sm disabled:pointer-events-none disabled:select-none
            "]) }}>
    <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-300 hidden">{{ $slot }}</label>
</div>
