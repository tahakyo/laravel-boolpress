@extends('layouts.dashboard')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Slug ----> {{ $post->slug }}</p>
    <p><strong>Category: </strong>{{ $post->category ? $post->category->name : 'No category' }}</p>
    <p>{{ $post->content }}</p>

    <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-warning mb-2">Edit</a>
    
    <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete this post')">Delete</button>

    </form>
@endsection
