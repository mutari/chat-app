@foreach ($posts as $post)

    <div id="post-{{ $post->id }}">
        <h4>{{ $post->title }}</h4>
        <span>{{ $post->text }}</span>
    </div>

@endforeach
