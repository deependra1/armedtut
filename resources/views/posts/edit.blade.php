<div>
    <h3>Edit Post</h3>
    <a href="{{ route('posts.index') }}">Back</a>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        Title:
        <input type="text" name="title" value="{{ $post->title }}">
        Body:
        <textarea name="body">{{ $post->body }}</textarea>
        <button type="submit">Save</button>
    </form>
</div>
