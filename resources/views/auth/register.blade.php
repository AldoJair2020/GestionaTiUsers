@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="min-h-screen flex flex-col sm:flex-row items-center justify-center mx-auto sm:mx-auto">
    <div class="mi-div bg-white w-full sm:w-auto sm:max-w-md sm:p-7 mb-4 sm:mb-0 mt-5 ml-4 sm:ml-0">
        <div class="text-center sm:text-left">
            
            <h1 class="text-4xl font-bold mt-4 text-center">¡Crea tu cuenta! xd</h1>

            <form class="mt-4" method="POST" action="">
                @csrf

                <div class="rounded-md w-full text-lg p-2 my-3 focus:bg-white" style="background: #D0F4E9; position: relative;">
                    <img src="storage/imagenes/user.png" alt="Icono de usuario" class="absolute left-3 top-3 h-5 w-5">
                    <input type="text" placeholder="Nombre(s)" id="name" name="name" class="pl-10 w-full bg-transparent" required>
                </div>

                <div class="rounded-md w-full text-lg p-2 my-3 focus:bg-white" style="background: #D0F4E9; position: relative;">
                    <img src="storage/imagenes/user.png" alt="Icono de usuario" class="absolute left-3 top-3 h-5 w-5">
                    <input type="text" placeholder="Apellidos" id="lastname" name="lastname" class="pl-10 w-full bg-transparent" required>
                </div>

                <div class="rounded-md w-full text-lg p-2 my-3 focus:bg-white" style="background: #D0F4E9; position: relative;">
                    <img src="storage/imagenes/email.png" alt="Icono de correo" class="absolute left-2 top-2 h-8 w-8">
                    <input type="email" placeholder="Correo electrónico" id="email" name="email" class="pl-10 w-full bg-transparent" required>
                </div>

                <div class="relative rounded-md w-full text-lg p-2 my-3 focus:bg-white" style="background: #D0F4E9;">
                    <img src="storage/imagenes/password.png" alt="Icono de contraseña" class="absolute left-3 top-3 h-5 w-5">
                    <input type="password" placeholder="Contraseña" id="password" name="password" class="pl-10 w-11/12 bg-transparent" required>
                </div>

                <div class="relative rounded-md w-full text-lg p-2 my-3 focus:bg-white" style="background: #D0F4E9;">
                    <img src="storage/imagenes/password.png" alt="Icono de contraseña" class="absolute left-3 top-3 h-5 w-5">
                    <input type="password" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation" class="pl-10 w-11/12 bg-transparent" required>
                </div>                                

               
                <label class="terminosycondiciones">
                    <input type="checkbox" name="terminos_y_condiciones" class="h-6 w-6 mr-3" required>
                    <span class="text-black ">Acepto&nbsp;</span> <a href="storage/terminosycondiciones/ce.pdf" target="_blank" class="text-indigo-600">términos y condiciones</a>
                </label>

                @error('email')
                <p class="text-red-600 text-center text-sm">El correo electronico ya ha sido registrado previamente</p>
                @enderror

                @error('password')
                <p class="text-red-600 text-center text-sm">Las contraseñas ingresadas no coinciden</p>
                @enderror

                @error('password')
                
                    @if ($message === 'La contraseña debe contener al menos una letra mayúscula y al menos un número')
                        <p class="text-red-600 text-center text-sm">La contraseña debe contener al menos una letra mayúscula y al menos un número</p>
                    @endif

                    @if ($message === 'La contraseña debe tener al menos 8 caracteres de longitud')
                        <p class="text-red-600 text-center text-sm">La contraseña debe tener al menos 8 caracteres de longitud</p>
                    @endif
                @enderror

                <center><button type="submit" class="rounded-full bg-indigo-500 text-lg text-white font-semibold py-2 px-9 my-4 bg-custom">Registrar cuenta</button></center>

                <center><a href="{{ route('login.index') }}" class="text-indigo-600 text-center font-normal text-lg">¡Ya tengo cuenta!</a></center>

            </form>
        </div>
    </div>

    <img src="{{ asset('storage/imagenes/publicidadylogo.png') }}" alt="Publicidad" class="imaregisterlogo mt-8 mx-5">
    

</div>


@endsection
