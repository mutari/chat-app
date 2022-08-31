<div id="post-{{ $post->id }}">
    <span class="post-creator">{{ $post->user->username }}</span>
    <div class="mb-1">
        <h4>{{ $post->title }}</h4>
        <span>{{ $post->text }}</span>
    </div>
</div>
