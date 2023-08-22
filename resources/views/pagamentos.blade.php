<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
               body {
                   background-color: #000000;
                   color: #fff;
               }



               .dados {

                border-radius:3%;
                border: 2px solid #6B6B6B;
                padding: 30px;
                margin: 20px 0px;

               }

               .main {

                 margin: 10px 40px;
                }

               .checkbox {

                margin-top: 100px;
                color: #1F1C1C;
                margin-left: 30px;
               }

               .form {
                background: #1F1C1C;
                width: 100%;
                height: 25px;
                margin-top: 5px;
                color: white;

               }

               .termos{

                background: white;
                width: 100%;
                height: 300px;
                color: black;
                padding: 10px;
               }

               .barra {
                color: white;
               }



           </style>
    </head>
    <body >

       <div class="main">

        <div class="col-md-6"><img src="{{asset('/logo.png')}}" width="60" height="60"></div>

          <div class="barra">
             <hr>
          </div>

          <div class="dados">

          <h4>1.Dados da conta</h4>

          <form action="/enviar-formulario" method="POST">

             <label for="email">E-mail</label><br>
             <input class="form" type="text" id="email" name="Example@email.com"><br><br>

             <label for="name">Nome Completo</label><br>
             <input class="form" type="text" id="name" name="Primeiro e ultimo nome"><br><br>

             <label for="telefone">Telefone</label><br>
             <input class="form" type="text" id="telefone" name=""><br><br>

            </form>


            <input class="checkbox" type="checkbox" id="concordar" name=""><label for="concordar">&nbsp;&nbsp;Sim, concordo com os <span style="color: red; fonte-size: 14">Termos e condicoes</span></label><br><br>

<div class="text-center">
<button type="button" ><img  src="{{asset('/voda.png')}}" alt="" width="160" height="80"></button>
<button type="button" ><img  src="{{asset('/movi.png')}}" alt="" width="160" height="80"></button>

</div>




          </div>
          <div class="termos">
         <h5>Link termos de uso:</h5>
         <a href="https://netkanema.co.mz/pages/termos-de-uso">https://netkanema.co.mz/pages/termos-de-uso</a>

          </div>

    </body>
</html>
