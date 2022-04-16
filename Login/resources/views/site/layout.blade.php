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
    width: 90%;
    max-width: 1000px;
    margin: auto;
    background: url(02.jpg),center;
    background-repeat:no-repeat ;
    background-size:cover;
    font-family: 'Courier New', Courier, monospace ;
    line-height: 2;
    color: rgb(251, 250, 250);
    font-size: 2em;
}
main{
    background: rgba(0, 0, 0, 0.534);
    padding: 10px 20px;
    margin-top: 20px;
    border-radius: 10px;
    font-size: 1em;    
}
</style>
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
    <b>Tá esperando o quê?</b></h3>
 </main>
</body>
</html>