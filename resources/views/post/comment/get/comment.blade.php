<div id="comment-{{ $comment->id }}" class="border-b border-b-gray-500 flex flex-col justify-between">
    <span class="comment-text">
        {{ $comment->text }}
    </span>
    <span class="comment-user text-end">
        {{ $comment->username }}
    </span>
</div>
