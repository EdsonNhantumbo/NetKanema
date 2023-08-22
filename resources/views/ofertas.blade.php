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
                   background-color: #1F1C1C;
                   color: #fff;
               }

               h4 {

                color: #E00000;
               }

               hr {
                color: #575757;
               }

               .radio {
        border: 2px solid #6B6B6B;
        padding: 30px;
        margin: 20px 0px;

                        }

                .main {

                    margin: 10px 40px;
                }

                .centrar {
                    text-align: center;
                }

                .barra {

                   margin: 1px;
                }


                .btn {

                    background: red;
                    width: 40px;
                }
           </style>
    </head>
    <body >

       <div class="main">



          <div class="col">
    <h4>Escolher oferta &nbsp;&nbsp;&nbsp;&nbsp; &gt; &nbsp;&nbsp;&nbsp;&nbsp; Informação do cliente </h4>
          </div>

          <div>
          <hr>
          </div>

          <div>
            <h3>Escolha a oferta e tenha acesso a quase tudo na plataforma</h3>
          </div>


        <div class="form-group">

   <div class="radio">
      <label><input type="radio" name="opcao" value="opcao1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscrição Mensal <span>Obter acesso ao catalogo numa base recorrente</span></label>
   </div>

   <div class="radio">
      <label><input  type="radio" name="opcao" value="opcao1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscrição Trimestral <span>Obter acesso ao catalogo numa base recorrente</span></label>
   </div>


   <div class="radio">
      <label><input type="radio" name="opcao" value="opcao1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscrição Semestral <span>Obter acesso ao catalogo numa base recorrente</span></label>
   </div>

   <div class="radio">
      <label><input type="radio" name="opcao" value="opcao1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscrição Anual <span>Obter acesso ao catalogo numa base recorrente</span></label>
   </div>

        </div>


        <div ><h3 class="Centrar">CineKanema - video clube (Sala de Cinema Virtual)</h3></div>


        <div class="barra">
          <hr>
          </div>

          <div class="container">

          <div class="row">

 <div class="col-md-6"><img src="{{asset('/imagem1.png')}}" alt="Resgate Suiscida - trailer"></div>
 <div class="col-md-6"><img src="{{asset('/imagem2.png')}}"></div>
 <div class="col-md-6"><img src="{{asset('/imagem3.png')}}"></div>
 <div class="col-md-6"><img src="{{asset('/imagem4.png')}}"></div>

          </div>
          </div>



       <div><a href="/pagamentos" class="btn">Continuar</a></div>
      </div>


    </body>
</html>
