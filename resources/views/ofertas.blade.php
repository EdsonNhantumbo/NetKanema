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

                .radio1 {
                          width: 20%;

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
                    width: 200px;
                    margin: 30px 0px;
                    color: white;

                }

                .videoclube {
                  margin:30px 30px 0px 30px;
                }

                .titulo {

                    margin: 1px 30px;
                }
           </style>
    </head>
    <body >

       <div class="main">

       <header>

       <div class="col-md-6"><img src="{{asset('/logo.png')}}" width="60" height="60"></div>

            </header>

          <div class="col">
          <span style="color: red; fonte-size: 14">Escolher oferta</span> &nbsp;&nbsp;&nbsp;&nbsp; &gt; &nbsp;&nbsp;&nbsp;&nbsp; Informação do cliente </h4>
          </div>

          <div>
          <hr>
          </div>

          <div>
            <h3>Escolha a oferta e tenha acesso a quase tudo na plataforma</h3>
          </div>


        <div class="form-group">

        <div class="row">

         <div class="col-md-12">
          <div class="radio">
             <label><input type="radio" name="opcao" value="opcao1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscrição Mensal <span>Obter acesso ao catalogo numa base recorrente</span></label>
          </div>
          </div>

        </div>

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


        <div class="text-center" ><h3>CineKanema - video clube (Sala de Cinema Virtual)</h3></div>


        <div class="barra">
          <hr>
          </div>

          <div class="container">

          <div class="row">

 <div class="col-md-6">
      <fIgure>
         </fIgure>
             <img class="videoclube" src="{{asset('/imagem1.png')}}">
                 <figcaption class="titulo">Resgate Suicida Trailer

                 </figcaption>
        <fIgure>

    </div>


    <div class="col-md-6">
      <fIgure>
         </fIgure>
             <img class="videoclube" src="{{asset('/imagem2.png')}}">
                 <figcaption class="titulo">AvoDezanove e o segredo do sovietico

                 </figcaption>
        <fIgure>

    </div>


    <div class="col-md-6">
      <fIgure>
         </fIgure>
             <img class="videoclube" src="{{asset('/imagem3.png')}}">
                 <figcaption class="titulo">Oportunidades Criminosas

                 </figcaption>
        <fIgure>

    </div>


    <div class="col-md-6">
      <fIgure>
         </fIgure>
             <img class="videoclube" src="{{asset('/imagem4.png')}}">
                 <figcaption class="titulo">Comboio de Sal e Acucar

                 </figcaption>
        <fIgure>

    </div>


          </div>
          </div>



       <div class="text-right"><a href="/pagamentos" class="btn">Continuar</a></div>
      </div>


    </body>
</html>
