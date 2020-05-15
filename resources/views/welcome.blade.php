@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список статей
        </h3>

        @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="{{route('post.show', ['post' => $post])}}">{{$post->name}}</a></h2>
                <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

                <p>{{$post->short_desc}}</p>
            </div>
        @endforeach
    </div><!-- /.blog-main -->
@endsection
