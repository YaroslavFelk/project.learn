@php
    $tags = $tags ?? collect()
@endphp


@if($tags->isNotEmpty())
    <div>
        @foreach($tags as $tag)
            <a href="{{route('post.tag', ['tag' => $tag])}}" class="badge badge-secondary"> {{$tag->tag}}</a>
        @endforeach
    </div>
@endif