@extends('layouts.dashboard')


@section('content')

<h1>Categories list</h1>

<ul>
  @foreach ($categories as $category)
      <li><a href="">{{ $category->name }}</a></li>
  @endforeach
</ul>
    
@endsection