@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список статей
        </h3>

        @foreach($posts as $post)
            <div class="blog-post">
                @include('posts.shortPost')

                @include('posts.tags', [ 'tags' => $post->tags])
            </div>
        @endforeach
    </div><!-- /.blog-main -->
@endsection
