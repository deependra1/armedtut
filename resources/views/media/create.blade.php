@extends('layouts.admin.layouts')

@section('content')
    <div>

        <div class="d-flex justify-content-between">
            <h3>Create Media</h3>
            <a href="{{ route('media.index') }}">Back</a>
        </div>

        <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title') <p>{{ $message }}</p>@enderror
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input type="file" class="form-control" id="title" name="file">
                @error('file') <p>{{ $message }}</p>@enderror
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@endsection

