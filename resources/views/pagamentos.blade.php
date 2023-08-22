<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
               body {
                   background-color: #000000;
                   color: #fff;
               }

               .barra {

                margin: 40px 0px;
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
               }

               .form {
                background: #1F1C1C;
                width: 100%;
                height: 25px;
                margin-top: 10px;
                color: white;

               }

           </style>
    </head>
    <body >

       <div class="main">

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


            <input class="checkbox" type="checkbox" id="concordar" name=""><label for="concordar">Sim, concordo com os termos e condicoes </label><br><br>


          </div>


    </body>
</html>
