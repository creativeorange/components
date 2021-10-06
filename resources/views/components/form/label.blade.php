@props([
    'required' => false,
    'optional' => false,
    'small' => true
])

<x-slot name="label">
    <label {{ $attributes->merge(['class' => 'block font-medium text-gray-700 sm:mt-px sm:pt-2 font-bold' . ($small ? ' text-sm' : '')]) }}>
        {{ $slot }}
        @if($required)
            <span class="text-red-600">*</span>
        @endif
        @if($optional)
            <span class="italic text-xs text-gray-500">({{ __('optional') }})</span>
        @endif
    </label>
</x-slot>
