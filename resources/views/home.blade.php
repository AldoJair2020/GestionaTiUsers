@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @if(auth()->check())
        <p class="text-4xl font-bold mt-4 text-center">Bienvenido a Gestiona Ti, <b>{{ auth()->user()->name }}</b>.</p>
        
        @role('admin')
        <h1>Si ves esto eres admin xd</h1>
        @endrole

        @role('candidato')
        <h1>Si ves esto eres candidato xd</h1>
        @endrole

        @role('superadmin')
        <h1>Si ves esto eres superadmin xd</h1>
        @endrole

    @endif
        
        
@endsection
