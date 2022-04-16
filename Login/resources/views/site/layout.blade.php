<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="black">
        <div class="nav-wrapper container black">
        <a href="{{route('home')}}" >Calvos.com</a>
            <ul class="right hide-on" >
                @guest
                    <li class="log"><a href="{{route('login')}}" >Login</a></li>
                    <li class="reg"><a href="{{route('register')}}" >Registre-se</a></li>    
                @endguest

                @auth
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                @endauth
            </ul>
        </div>
    </nav>
 <main>
    <h3>Cansado de ser chamado de careca?</h3><br>
    <h3>Registre-se agora em nosso site e resolva esse problema de vez. 
        Segredos nunca revelados serão contados de graça... <br>
    <b>Está esperando o quê?</b></h3>
 </main>
</body>
</html>