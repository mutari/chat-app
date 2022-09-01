<div id="post-{{ $post->id }}">
    <span class="post-creator">{{ $post->username }}</span>
    <div class="mb-1">
        <h4>{{ $post->title }}</h4>
        <span>{{ $post->text }}</span>
    </div>
    <hr>
    <div class="post-actions">
        <a onclick="getComments({{ $post->id }})">
            <span>{{ $post->numberOfComments }}</span>
            <i class="bi bi-chat-dots"></i>
            <i class="bi bi-caret-down"></i>
        </a>
    </div>
    <div class="post-comment-section d-none">
        <div class="post-comment-input">
            <textarea class="form-control mb-2" id="comment-input" rows="3" placeholder="What do you think?"></textarea>
            <button onclick="publishComment(this, {{ $post->id }})" class="btn btn-secondary float-end">
                Write
            </button>
        </div>
        <div class="post-comments">

        </div>
    </div>
</div>
