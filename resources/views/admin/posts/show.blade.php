@extends('layouts.dashboard')

@section('content')

<h1>{{ $post->title }}</h1>
<p>Slug ----> {{ $post->slug }}</p>
<p>{{ $post->content }}</p>
    
@endsection