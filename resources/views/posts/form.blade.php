@csrf

<div class="form-group">
    <label for="name">Название статьи</label>
    <input name="name" type="text" class="form-control" id="name" value="{{ old('name', $post->name ?? '') }}">
</div>

<div class="form-group">
    <label for="short_desc">Короткое описание статьи</label>
    <textarea name="short_desc" class="form-control"
              id="short_desc">{{ old('short_desc', $post->short_desc ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="long_desc">Полное описание статьи</label>
    <textarea name="long_desc" rows="10" class="form-control"
              id="long_desc">{{ old('long_desc', $post->long_desc ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="tags">Теги</label>
    <input name="tags" type="text"
           class="form-control" id="tags"
           @isset ($post->tags)
           value="{{ old('tags', $post->tags->pluck('tag')->implode(' , '))}}">
    @endif
</div>

<div class="form-check">

    <input type="checkbox" value="1" class="form-check-input" name="isPublish"
           id="isPublish" {{old('isPublish', $post->isPublish ?? '') ? 'checked' : ''}}>
    <label class="form-check-label" for="publish">Статья опубликована</label>
</div>

