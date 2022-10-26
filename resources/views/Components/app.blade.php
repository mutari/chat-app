<a class="app flex flex-col mx-2 gap-2" href="{{ $href }}">
    <div class="border border-gray-500 rounded-lg p-2 mx-auto">
        @includeIf("Components.icons.outline.$icon")
    </div>
    <span class="app-title text-center">{{ $slot }}</span>
</a>
