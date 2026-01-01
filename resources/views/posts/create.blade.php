@extends('layouts.admin.layouts')

@section('content')
    <div>

        <div class="d-flex justify-content-between">
            <h3>Create Post</h3>
            <a href="{{ route('posts.index') }}">Back</a>
        </div>

        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" rows="3" name="body"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@endsection

