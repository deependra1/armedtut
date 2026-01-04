@extends('layouts.admin.layouts')

@section('content')
    <div>
        <div class="d-flex justify-content-between">
            <h3>Post index</h3>
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Add New</a>
        </div>

        @if(session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif


        <table class="table table-bordered mt-2">
            <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $cat)
                <tr>
                    <td>{{ $cat->name }}</td>

                    <td>
{{--                        <a class="btn btn-outline-info" href="{{ route('posts.show', $post) }}">Show</a>--}}
{{--                        <a class="btn btn-outline-info" href="{{ route('posts.edit', $post) }}">Edit</a>--}}
{{--                        <form action="{{ route('posts.destroy', $post) }}" method="post" style="display: inline">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button class="btn btn-outline-danger" type="submit" onclick="confirm('Sachhai garni ho?')">Delete</button>--}}
{{--                        </form>--}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
{{--        {{ $posts->links('pagination::bootstrap-5') }}--}}
    </div>

@endsection
