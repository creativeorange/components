<div class="bg-white overflow-hidden sm:rounded-lg py-3">
    {{ $intro ?? '' }}
    <table class="w-full divide-y divide-gray-200">
        {{ $slot }}
    </table>
</div>
