@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создание статьи.
        </h3>

        @include('layout.errors')

        <form method="POST" action="{{route('posts.update', ['post' => $post])}}">
            @method('PATCH')
            @include('posts.form', $post)

            <button type="submit" class="btn btn-primary mt-4">Редактировать статью</button>
        </form>

        <form method="POST" action="{{route('posts.destroy', ['post' => $post])}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-primary mt-4">Удалить статью</button>
        </form>
    </div>
@endsection

