@extends('layouts.dashboard')

@section('content')
    <h2><strong>Category: </strong>{{ $category->name }}</h2>

    <h5>Slug: {{ $category->slug }}</h5>
    <ul>

        @forelse ($category->posts as $post)
            <li><a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></li>
        @empty
            <li>No result</li>
        @endforelse

    </ul>
@endsection
