@extends('layouts.admin.layouts')

@section('content')
<div>
    <h3>Edit Post</h3>
    <a href="{{ route('posts.index') }}">Back</a>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <lable for="categories" class="form-label">
                <select class="form-select" name="category_id">
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ $post->category->id == $category->id ? 'selected':'' }}
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach


                </select>
            </lable>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            @error('title') <p>{{ $message }}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" rows="3" name="body">{{ $post->body }}</textarea>
            @error('body') <p>{{ $message }}</p> @enderror
        </div>
        <div class="mb-3">
            <lable for="categories" class="form-label">
                <select class="form-select" name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option
                            value="{{ $tag->id }}"
                            {{ $post->tags->contains($tag->id)?'selected':'' }}
                        >
                            {{ $tag->title }}
                        </option>
                    @endforeach


                </select>
            </lable>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>

@endsection
