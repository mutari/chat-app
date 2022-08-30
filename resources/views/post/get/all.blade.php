@foreach ($posts as $post)

    @include('post.get.post', ['post' => $post])

@endforeach
