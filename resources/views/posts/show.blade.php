@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{$post->name}}
        </h3>

        @include('posts.tags', [ 'tags' => $post->tags])

        @can('update', $post)
        <a href="{{route('post.edit', ['post' => $post])}}">Редактировать</a>
        @endcan
        <div class="blog-post">
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

            <p>{{$post->long_desc}}</p>
        </div>

        <p class="mt-5"><a href="{{url('/')}}">Вернуть на главную</a></p>
    </div><!-- /.blog-main -->

@endsection


