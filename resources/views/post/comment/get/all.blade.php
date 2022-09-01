@foreach ($comments as $comment)

    @include('post.comment.get.comment', ['comment' => $comment])

@endforeach
