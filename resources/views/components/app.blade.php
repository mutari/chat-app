<a class="app flex flex-col gap-2" href="{{ $href }}">
    <div class="border border-gray-500 rounded-lg p-2 mx-auto">
        @includeIf("components.icons.outline.$icon")
    </div>
    <span class="app-title text-center">{{ $slot }}</span>
</a>
