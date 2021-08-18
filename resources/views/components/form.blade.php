<div class="bg-white overflow-hidden sm:rounded-lg">
    <form {{ $attributes->merge(['class' => 'space-y-8 divide-y divide-gray-200']) }}>
        @csrf
        {{ $customMethod ?? '' }}
        @if(!empty($intro) || !empty($fieldset))
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div>
                    {{ $intro ?? '' }}

                    @if(!empty($fieldset))
                        <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                            {{ $fieldset }}
                        </div>
                    @endif
                </div>
            </div>
        @endif
        @if (!empty($buttons))
            <div class="p-6">
                <div class="flex justify-end">
                    {{ $buttons }}
                </div>
            </div>
        @endif
    </form>
</div>
