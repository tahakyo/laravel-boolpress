@extends('layouts.dashboard')

@section('content')
    <h1>Posts list</h1>
    <div class="row row-cols-3">

        @foreach ($posts as $post)
            {{-- single card --}}
            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <a href="#" class="btn btn-primary">See post</a>
                    </div>
                </div>
            </div>
            {{-- single card --}}
        @endforeach

    </div>
@endsection
