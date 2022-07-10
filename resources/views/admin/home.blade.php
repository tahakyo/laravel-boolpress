@extends('layouts.dashboard')

@section('content')
    <h1>Hello {{ $user->name }} welcome to</h1>
    <h1>Back-Office Homepage</h1>
    
    @if ($user->userInfo){{-- controllo che serve per quando il risultato è null non appare l errore --}}
        <p>Adress: {{ $user->userInfo->adress }}</p>
        <p>Phone: {{ $user->userInfo->phone }}</p>
    @endif
@endsection
