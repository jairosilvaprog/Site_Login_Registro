<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
<style>
    body{
      font-size: 2em; 
      font-family: "Raleway", sans-serif;
    }
    </style>
</head>
<body>
    <nav class="black">
        <div class="nav-wrapper container black">
        <a href="{{route('home')}}" >Site teste</a>
            <ul class="right hide-on" >
                @guest
                    <li><a href="{{route('login')}}" >Login</a></li>
                    <li><a href="{{route('register')}}" >Registre-se</a></li>    
                @endguest

                @auth
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                @endauth
            </ul>
        </div>
    </nav>
<img src="01.jpg" alt="plano de fundo">  
</body>
</html>