<div id="post-{{ $post->id }}" data-post="{{ $post->id }}" class="w-full px-5 py-2 relative border-slate-800 bg-slate-600 border border-slate-700 rounded-md">
    <span class="post-creator absolute right-5">{{ $post->username }}</span>
    <div class="mb-2">
        <div class="mb-2 text-xl">
            <h4>{{ $post->title }}</h4>
        </div>
        <div>
            <span>{{ $post->text }}</span>
        </div>
    </div>
    <hr>
    <div class="post-actions">
        <a class="post-load-comments flex flex-row items-center cursor-pointer">
            <span>{{ $post->numberOfComments }}</span>
            <span class="chevron-up hidden">
                @includeIf("components.icons.mini.chevronUp")
            </span>
            <span class="chevron-down">
                @includeIf("components.icons.mini.chevronDown")
            </span>
        </a>
    </div>
    <div class="post-comment-section hidden">
        <div class="post-comment-input">
            <x-textarea name="comment-input" id="comment-input" rows="3" placeholder="What do you think?"></x-textarea>
            <x-button onclick="publishComment(this, {{ $post->id }})">Write</x-button>
        </div>
        <div class="post-comments"></div>
    </div>
</div>
