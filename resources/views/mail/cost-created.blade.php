@component('mail::message')
    # Создана новая статья: {{$post->name}}

    <{{$post->short_desc}}>

    @component('mail::button', ['url' => route('posts.show', ['post' => $post])])
        Посмотреть статью
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
