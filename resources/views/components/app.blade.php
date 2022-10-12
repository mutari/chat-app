<a class="app" href="{{ $href }}" >
    <div class="btn btn-outline-secondary app-icon">
        @includeIf("components.icons.$icon")
    </div>
    <span class="app-title">{{ $slot }}</span>
</a>
