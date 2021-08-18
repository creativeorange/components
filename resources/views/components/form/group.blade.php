@props([
    'border' => true
])

<div class="px-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-6 {{ ($border) ? 'sm:border-t sm:border-gray-200' : '' }}">
    {{ $label  }}
    <div class="mt-1 sm:mt-0 sm:col-span-2">
        <div class="max-w-lg flex">
            {{ $input }}
        </div>
    </div>
</div>
