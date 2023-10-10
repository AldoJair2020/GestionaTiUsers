@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @if(auth()->check())
        <p class="text-4xl font-bold mt-4 text-center">Bienvenido a Gestiona Ti, <b>{{ auth()->user()->name }}</b>.</p>
    @endif
        
        
@endsection
