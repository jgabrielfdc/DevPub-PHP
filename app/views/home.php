<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include("components/header_links.php") ?>
  <title>DevHub - Home</title>
</head>

<body>

  <?php require("components/menu.php") ?>

  <!--Conteúdos-->
  <section id="corpo_principal">
    <section id="home">

      <div class="container">

        <div class="row">

          <div class="col-md-12 capa">

            <div class='alinhamento'>
              <div class="carousel slide" data-ride="carousel" id="carrossel">

                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <h1 class="text-light">Um Caminho para Seguir</h1>
                    <a href="/materiais" class="btn btn-roxo btn-custom ">Descubra as opções</a>
                  </div>

                  <div class="carousel-item">
                    <h1 class="text-light">Conteúdos Selecionados</h1>
                    <a href="/cadastro" class="btn btn-custom btn-roxo">
                      <i id='note' class="fab fa-music">Comece já seus estudos</i>
                    </a>
                  </div>

                  <!--Controles-->
                  <a href="#carrossel" class="carousel-control-prev" data-slide="prev"></a>
                  <a href="#carrossel" class="carousel-control-next" data-slide="next"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id='corpo_conteudos' class="bg-light p-2 clearfix">
      <!--Seção 1-->
      <section class="caixa" style="margin-left:3%;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="align-self-center text-left-sm">
                <h2>O que é esse site ?</h2>
                <p>
                  &nbsp; Esta é uma plataforma para o compartilhamento de conhecimentos para aqueles que estão começando
                  na programação.<br>
                  &nbsp; Um espaço para auxiliar aqueles que tem alguma dificuldade com o aprendizado das tecnologias
                  necessarias para ingressar nesta área.
                </p>
                <a href="/intro" class="btn btn-primary">Veja Mais</a>
              </div>
            </div>
          </div>
        </div>
      </section><!--Fim Sec 1-->

      <hr>

      <!--Inicio Sec 2-->
      <section class="caixa" style="margin:20px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <i class="fas fa-solid fa-laptop-code fa-7x note"></i>
            </div>
            <div class="col-md-6 d-flex">
              <div class="align-self-center">
                <h2>Quem Somos?</h2>
                <p>
                  &nbsp;Somos uma equipe dedicada em auxiliar os estudos de quem está ingressando no mundo do
                  desenvolvimento de softwares.
                </p>
                <a href="/equipe" class="btn btn-primary">Veja Mais</a>

              </div>
            </div>
          </div>
        </div>
      </section><!--Fim Sec 2-->

      <hr>

      <!--Inicio Sec Recursos-->
      <section class="caixa">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <i class="fas fa-solid fa-graduation-cap fa-5x mb-3 desc" style="color:#89A2FA; top:21%;"></i>
              <h4>Intuitivo</h4>
              <p>
                Os conteúdos são organizados para a melhor compreensão dos nossos estudantes.
              </p>
            </div>
            <div class="col-md-4">
              <i class="fas fa-solid fa-user-clock fa-5x mb-3 desc"></i>
              <h4>Economize seu tempo</h4>
              <p>
                Aqui reúnimos o essencial para você
              </p>
            </div>
            <div class="col-md-4">
              <i class="fas fa-solid fa-users fa-5x mb-3 desc" style="color:#FDDB5C;"></i>
              <h4>Suporte amigo</h4>
              <p>
                Dúvidas? Perguntas? Nosso suporte super legal ajuda você! A gente tá aqui pra resolver seis problemas e
                deixar sua vida bem mais fácil!
              </p>
            </div>
          </div>
        </div>
      </section>

      <!--Fim Sec Recursos-->
    </section>

    <?php require("components/footer.php") ?>

    <?php require("components/javascript_links.php") ?>
</body>

</html>