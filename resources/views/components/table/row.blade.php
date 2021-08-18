@props([
    'iteration' => 1
])

<tr class="{{ ($iteration % 2 === 0) ? 'bg-gray-50' : 'bg-white' }}">
    {{ $slot }}
</tr>
