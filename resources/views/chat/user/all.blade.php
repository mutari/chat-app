<div class="flex flex-col gap-2">
    @foreach($users as $user)

        @include('chat.user.user', ['user' => $user])

    @endforeach
</div>