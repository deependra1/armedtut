@extends('layouts.front')

@section('content')
<h1>Main Content from hello</h1>
@php
    $posts=[
        [
            'title'=>'First Post',
            'content'=>'<p>This is <b> First </b>Post</p>'
        ],
         [
            'title'=>'Second Post',
            'content'=>'<p>This is <b> Second </b>Post</p>'
        ],
         [
            'title'=>'Third Post',
            'content'=>'<p>This is <b> Third </b>Post</p>'
        ],
    ];
@endphp

@if (count($posts))
    <p>Post : {{ count($posts) }}</p>
@else
    <p> NO post found!!</p>    
@endif

@foreach($posts as $post)
<h3>{{ $post['title'] }}</h3>
    {!!  $post['content'] !!}
@endforeach


@endsection