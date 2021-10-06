@props([
    'defaultRows' => 3,
    'defaultClass' => 'shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md'
])

<x-slot name="input">
    <textarea {{ $attributes->merge([
        'class' => $defaultClass,
        'rows' => $defaultRows,
    ]) }}>{{ $slot }}</textarea>
</x-slot>
