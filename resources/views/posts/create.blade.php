@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создание статьи.
        </h3>

        @include('layout.errors')

        <form method="post" action="{{route('posts.store')}}">

            @csrf

            <div class="form-group">
                <label for="slug">Дайте уникальное имя вашей статье</label>
                <input name="slug" type="text" class="form-control" id="slug" value="{{ old('slug') }}"/>
            </div>

            @include('posts.form')

            <button type="submit" class="btn btn-primary mt-4">Создать статью</button>
        </form>
    </div>
@endsection

