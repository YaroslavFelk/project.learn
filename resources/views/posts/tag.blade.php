@extends('layout.master')

@section('content')

    <div class="col-md-8 blog-main">
        <h2 class="pb-3 mb-4 font-italic border-bottom"> {{$tag->tag}} </h2>
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список статей
        </h3>

        @foreach($tag->posts as $post)
            @include('posts.shortPost')
        @endforeach

        <p class="mt-5"><a href="{{url('/')}}">Вернуть на главную</a></p>
    </div><!-- /.blog-main -->

@endsection