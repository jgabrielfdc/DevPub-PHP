<!DOCTYPE html>
<html lang="pt-br">

<head>

  <?php include("components/header_links.php") ?>

  <title>DevPub - Matérias</title>

</head>

<body>
  <!--Cabeçalho-->
  <?php require("components/menu.php") ?>
  

  
  <section id="front" class="bg-light">
    <!--Não mexe nesse container-->
    <div class="container my-5">
      <div class="row no-gutters">

        <div class="col-md-3 col-sm-12 w-100 bg-light p-3 sombra border-right-0 rounded-left border border-dark"
          style="z-index:1;">
          <h1 class="wrap text-md-left text-sm-center py-sm-auto" style="text-shadow:none">Front-End</h1>
          <hr>
          <p class=" d-flex flex-wrap text-md-left text-sm-center">
            A Área do Desenvolvimento voltada ao desenvolvimento de layout, interfaces de usuarios, entre outros...
          </p>
        </div>

        <div class="col-md-9 col-sm-12 w-100 bg-light py-2 sombra border-left-0 rounded-right border border-dark">
          <div class="py-1">
            <div class="d-flex flex-wrap justify-content-around py-2 rounded scroll border sombra-dentro">

              <h2 class="border-bottom border-dark w-50 text-center mb-3">Linguagens</h2>

              <div class="card-columns d-flex flex-wrap justify-content-around align-content-center no-gutters p-2 w-100">
                <!--Card 1-->
                <div class="card-columns d-flex flex-wrap teste p-2 w-100">
                  <div class="card border-dark text-light w-auto h-auto card-imagem sombra">
                    <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/HTML.jpg');">
                    </div>
                    <div class="card-body border-dark border-top"
                      style="background: radial-gradient(rgb(240, 162, 46),rgb(255, 115, 0));">
                      <h4 class="card-title">HTML</h4>
                      <a class="btn btn-outline-light btn-lg" href="/html">Leia mais</a>
                    </div>
                  </div>

                  <!--Card 2-->
                  <div class="card border-dark text-light w-auto h-auto card-imagem sombra no-gutters">
                    <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/CSS.png');"></div>
                    <div class="card-body border-dark border-top"
                      style="background: linear-gradient(to bottom, rgb(119, 119, 243), rgb(119, 193, 218));">
                      <h4 class="card-title">CSS</h4>
                      <a class="btn btn-outline-light btn-lg" href="/css">Leia mais</a>
                    </div>
                  </div>
                </div>
              </div>

              <h2 class="border-bottom border-dark w-50 text-center p-2 mt-5 mb-3">Frameworks</h2>
              <div class="card-columns d-flex flex-wrap teste p-2 w-100">

                <!--Card 3-->
                <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                  <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/bootstrap.png');">
                  </div>
                  <div class="card-body border-dark border-top"
                    style="background: linear-gradient(to bottom, rgb(102, 35, 228), #444);">
                    <h4 class="card-title">Bootstrap</h4>
                    <a class="btn btn-outline-light btn-lg" href="/bootstrap">Leia mais</a>
                  </div>
                </div>

                <!--Card 3-->
                <div class="card border-dark text-danger w-auto h-auto card-imagem sombra ">
                  <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/angular.png');">
                  </div>
                  <div class="card-body border-dark border-top">
                    <h4 class="card-title">Angular</h4>
                    <a class="btn btn-outline-danger btn-lg" href="/angular">Leia mais</a>
                  </div>
                </div>

                <!--Card 3-->
                <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                  <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/sass.png');"></div>
                  <div class="card-body border-dark border-top"
                    style="background: linear-gradient(to bottom, rgb(216, 76, 186), #DAA);">
                    <h4 class="card-title">Sass</h4>
                    <a class="btn btn-outline-light btn-lg" href="/sass">Leia mais</a>
                  </div>
                </div>



              </div>
              <h2 class="border-bottom border-dark w-50 text-center p-2 mt-5 mb-3">Bibliotecas</h2>
              <div class="card-columns d-flex flex-wrap teste p-2 w-100">

                <!--Card 3-->
                <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                  <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/react.png');"></div>
                  <div class="card-body border-dark border-top"
                    style="background: linear-gradient(140deg, rgb(103, 215, 252), rgb(109, 170, 219));">
                    <h4 class="card-title">React</h4>
                    <a class="btn btn-outline-light btn-lg" href="/react">Leia mais</a>
                  </div>
                </div>


              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <hr>

  <section id="back" class="bg-light">
    <!--Não mexe nesse container-->
    <div class="container my-5">
      <div class="row no-gutters">

        <!-- Letreiro -->
        <div class="col-md-3 col-sm-12 w-100 bg-light p-3 sombra border-right-0 rounded-left border border-dark"
          style="z-index:1;">
          <h1 class="wrap text-md-left text-sm-center py-sm-auto" style="text-shadow:none">Back-End</h1>
          <hr>
          <p class="wrap text-md-left text-sm-center">
            A Área da programação, voltada a criação de sistemas, programas, aplicativos. É nela que os dados são
            processados, ela é a parte que faz o sistema todo funcionar, como se fossem as engrenagens
          </p>
        </div>

        <!--Caixa de Cards-->
        <div class="col-md-9 col-sm-12 w-100 bg-light py-2 sombra border-left-0 rounded-right border border-dark">
          <div class="py-1">
            <div class="d-flex flex-wrap justify-content-around py-2 rounded scroll border sombra-dentro">

              <h2 class="border-bottom border-dark w-100 text-center mb-3">Banco de Dados</h2>

              <div class="card-columns d-flex flex-wrap justify-content-around align-content-center no-gutters p-2 w-100">
                <!--Card 1-->
                <div class="card-columns d-flex flex-wrap  teste p-2 w-100">
                  <div class="card border-dark text-light w-auto h-auto card-imagem sombra">
                    <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/sql.png');">
                    </div>
                    <div class="card-body border-dark border-top">
                      <h4 class="card-title" style="color:#fa6a36;">SQL</h4>
                      <a class="btn sql btn-lg" href="/html">Leia mais</a>
                    </div>
                  </div>

              </div>

              <h2 class="border-bottom border-dark w-100 text-center p-2 mt-5 mb-3">Linguagens</h2>
              <div class="card-columns d-flex flex-wrap teste p-2 w-100">

                <!--Card 2-->
              <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/python.png');"></div>
                <div class="card-body border-dark border-top" style="background-color:#004873;">
                  <h4 class="card-title"><span style="color:#00ACE8">Pyt</span><span style="color:#EDD046">hon</span>
                  </h4>
                  <a class="btn py btn-lg" href="/python"><span style="color:#EDD046">Leia</span><span
                      style="color:#00ACE8">Mais</span></a>
                </div>
              </div>

              <!--Card 3-->
              <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/csharp.png');"></div>
                <div class="card-body border-dark border-top"
                  style="background:linear-gradient(162deg,#B077F8,#B077F8,#4B3B77,#291955);">
                  <h4 class="card-title">C-Sharp</h4>
                  <a class="btn btn-outline-light btn-lg" href="/csharp">Leia mais</a>
                </div>
              </div>

              <!--Card 4-->
              <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/php.png');"></div>
                <div class="card-body border-dark border-top" style="background:#556594;">
                  <h4 class="card-title">Php</h4>
                  <a class="btn btn-outline-light btn-lg" href="/php">Leia mais</a>
                </div>
              </div>

              <!--Card 5-->
              <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/java.png');"></div>
                <div class="card-body border-dark border-top" style="background:#EB2D2F;">
                  <h4 class="card-title">Java</h4>
                  <a class="btn btn-outline-light btn-lg" href="/java">Leia mais</a>
                </div>
              </div>

              <!--Card 6-->
              <div class="card border-dark text-light w-auto h-auto card-imagem sombra ">
                <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/js.png');"></div>
                <div class="card-body border-dark border-top" style="background:#FFE719;">
                  <h4 class="card-title text-black">JavaScript</h4>
                  <a class="btn  btn-lg btn-outline-black" href="/js">Leia mais</a>
                </div>
              </div>
              </div>
              <h2 class="border-bottom border-dark w-100 text-center p-2 mt-5 mb-3">Bibliotecas</h2>
              <div class="card-columns d-flex flex-wrap teste p-2 w-100">

                <!--Card 3-->
                <div class="card border-dark text-dark w-auto h-auto card-imagem sombra ">
                  <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/placeholder.png');"></div>
                  <div class="card-body border-dark border-top">
                    <h4 class="card-title">Em Breve</h4>
                    <a class="btn btn-outline-dark btn-lg" href="/#">Em breve..</a>
                  </div>
                </div>


              </div>

              <h2 class="border-bottom border-dark w-100 text-center p-2 mt-5 mb-3">Frameworks</h2>
              <div class="card-columns d-flex flex-wrap teste p-2 w-100">

                <!--Card 3-->
                <div class="card border-dark text-dark w-auto h-auto card-imagem sombra ">
                  <div class="card-img-top card-imagem" style="background:url('imagens/prototipação/placeholder.png');"></div>
                  <div class="card-body border-dark border-top">
                    <h4 class="card-title">Em Breve</h4>
                    <a class="btn btn-outline-dark btn-lg" href="/#">Em breve..</a>
                  </div>
                </div>


              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <?php require("components/footer.php") ?>
  <?php require("components/javascript_links.php") ?>

</body>

</html>