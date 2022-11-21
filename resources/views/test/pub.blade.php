@extends('layouts.layout')

@section('content')

    <h1>
        test pub kannal
    </h1>

    <div class="flex flex-col">
        <div class="w-96">
            {{--<script type="text/javascript" async src="https://recruto.local/apps/widget/postings/c/1/a/42a1733e" id="recruto-widget-1" class="recruto-widget"></script>--}}
            <script type="text/javascript" async src="https://recrutodemo.se/apps/widget/postings/c/23/a/9295e5d1" id="recruto-widget-23" class="recruto-widget"></script>
        </div>
    </div>

    <span>
        <?php
            phpinfo();
        ?>
    </span>

@endsection
