@extends('layouts.dashboard')

@section('content')
    <h1>Add new post</h1>
    {{-- validation rule --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- validation rule --}}

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" class="form-control" id="content" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-dark">Add</button>
    </form>
@endsection
