@props([
    'download' => false,
    'confirm' => false,
    'delete' => false,
    'name' => 'confirm',
    'title' => 'Are you sure?',
    'firstButton' => 'OK',
    'secondButton' => 'Cancel',
])

@if ($download)
    <a {{ $attributes->merge(['class' => 'mx-2 text-indigo-600 hover:text-indigo-900']) }} download>{{ $slot }}</a>
@elseif($confirm)
    <div x-data="{ {{ $name }}: false }" class="inline-block">
        <button type="button" class="mx-2 text-indigo-600 hover:text-indigo-900"
                @click="{{ $name }} = !{{$name}}">{{ $slot }}</button>
        <x-modal.confirm :name="$name" :title="$title" :firstButton="$firstButton" :secondButton="$secondButton"
                         :action="$attributes->get('href')">
            {{ $modalMessage }}
        </x-modal.confirm>
    </div>
@elseif($delete)
    <div x-data="{ {{ $name }}: false }" class="inline-block">
        <button type="button" class="mx-2 text-indigo-600 hover:text-indigo-900"
                @click="{{ $name }} = !{{$name}}">{{ $slot }}</button>
        <x-modal.delete-confirm :name="$name" :title="$title" :firstButton="$firstButton" :secondButton="$secondButton"
                                :action="$attributes->get('href')">
            {{ $modalMessage }}
        </x-modal.delete-confirm>
    </div>
@else
    <a {{ $attributes->merge(['class' => 'mx-2 text-indigo-600 hover:text-indigo-900']) }}>{{ $slot }}</a>
@endif
