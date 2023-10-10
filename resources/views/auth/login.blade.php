@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="min-h-screen flex flex-col sm:flex-row items-center justify-center mx-auto sm:mx-auto">
    <div class="mi-div bg-white w-full sm:w-auto sm:max-w-md sm:p-10 mb-4 sm:mb-0 mt-8">
        <div class="text-center sm:text-left">
            <center>
                <div class="w-32 h-32 sm:w-25 sm:h-25 mx-auto sm:mx-0">
                    <img src="{{ asset('storage/imagenes/logo.png') }}" alt="Logo de la aplicación">
                </div>
            </center>
            <h1 class="text-4xl font-bold mt-4 text-center">Iniciar Sesión</h1>

            <form class="mt-4" method="POST" action="">
                @csrf

                <div class="rounded-md w-full text-lg p-2 my-2 focus:bg-white" style="background: #D0F4E9; position: relative;">
                    <img src="storage/imagenes/email.png" alt="Icono de correo" class="absolute left-2  top-2 h-8 w-8">
                    <input type="email" placeholder="Correo electrónico" id="email" name="email" class="pl-10 w-full bg-transparent" required>
                </div>

                <div class="relative rounded-md w-full text-lg p-2 my-3 focus:bg-white" style="background: #D0F4E9;">
                    <img src="storage/imagenes/password.png" alt="Icono de contraseña" class="absolute left-3 top-3 h-5 w-5">
                    <input type="password" placeholder="Contraseña" id="password" name="password" class="pl-10 w-11/12 bg-transparent" required>
                    <button type="button" id="verPassword" class="absolute right-2 top-3 focus:outline-none">
                        <img src="storage/imagenes/ojito.png" alt="Mostrar contraseña" class=" h-7 w-10">
                    </button>
                </div>

                <script>
                    const togglePasswordButton = document.getElementById('verPassword');
                    const passwordInput = document.getElementById('password');

                    togglePasswordButton.addEventListener('click', function () {
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                        } else {
                            passwordInput.type = 'password';
                        }
                    });
                </script>

                @error('message')
                <p class="text-red-600 text-center text-sm">{{ $message }}</p>
                @enderror

                <center><button type="submit" class="rounded-full bg-indigo-500 text-lg text-white font-semibold py-2 px-9 my-4 bg-custom">Ingresar</button></center>

                <center><a href="{{ route('register.index') }}" class="text-indigo-600 text-center font-normal text-lg">¡Crear nueva cuenta!</a><br>

                <a href="{{ route('register.index') }}"class="text-indigo-600 text-center font-normal text-lg">¿Olvidaste tu contraseña?</a></center>

            </form>
        </div>
    </div>

    <div class="flex justify-center mt-8 mx-5">
        <a href="{{ route('register.index') }}">
            <img src="{{ asset('storage/imagenes/GT.png') }}" alt="Publicidad" class="w-full sm:w-auto h-auto">
        </a>
    </div>
    
</div>



@endsection
