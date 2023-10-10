<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - GestionaTiUsers</title>
    <link rel="icon" href="{{ asset('storage/imagenes/logo.ico') }}">

    
     <!-- Tailwind CSS Link -->
     <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #E7F9FE;
        }
        .login{
          width: 500px;
          height: 510px;
          flex-shrink: 0;
          border-radius: 50px;
          border: 3px solid #3AA9FE;
          background: #FFF;
        }
        .logocen{
          width: 130px;
          height: 130px;
          flex-shrink: 0;
        }
        .ima{
          width: 604px;
          height: 610px;
          flex-shrink: 0;
        }
        .bg-custom {
        background-color: #5FBED2;
        }

        .mi-div {
          width: 500px; 
          border-radius: 50px;
          border: 3px solid #3AA9FE;
          background: #FFF;
        }

        .terminosycondiciones{
          display: flex;
          align-items: center;
          justify-content: center;
          text-align: center; /* Alinea el texto en el centro */
          margin-top: 20px; /* Puedes ajustar el margen superior según tu diseño */
        }

        .imaregister{
          width: 25%; /* Ancho deseado */
          height: auto; /* Altura automática para mantener la proporción */
          flex-shrink: 0;
        }

        .imaregisterlogo{
          width: 35%; /* Ancho deseado */
          height: auto; /* Altura automática para mantener la proporción */
        }
    </style>

  </head>

  <body>
 
      @if(auth()->check())
      <nav class="flex py-5 bg-transparent -500 text-white">
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
          <li>
            <a href="{{ route('login.destroy') }}" class="font-bold
            py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Cerrar Sesi&oacute;n</a>
          </li>
        </ul>
      </nav>
      @endif

    


    @yield('content')

  </body>
</html>