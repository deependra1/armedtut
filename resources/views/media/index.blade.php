@extends('layouts.admin.layouts')

@section('content')
<div>
    <div class="d-flex justify-content-between">
        <h3>Media index</h3>
        <a class="btn btn-primary" href="{{ route('media.create') }}">Add New</a>
    </div>

    @if(session('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <table class="table table-bordered mt-2">
        <thead>
        <tr>
            <th>Title</th>
            <th>Preview</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($medias as $media)
            <tr>
                <td>{{ $media->title }}</td>
                <td>
                    <img src="{{ $media->path }}" height="200" alt="" />
                </td>

                <td>
                    <a class="btn btn-outline-info" href="{{ route('media.show', $media) }}">Show</a>
                    <a class="btn btn-outline-info" href="{{ route('media.edit', $media) }}">Edit</a>
                    <form action="{{ route('media.destroy', $media) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit" onclick="confirm('Sachhai garni ho?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $medias->links('pagination::bootstrap-5') }}
</div>
@endsection
