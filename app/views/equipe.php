<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php require("components/header_links.php") ?>
<style>
   h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 36px;
    font-weight: bold;
    text-decoration: underline;
    border-bottom: 5px solid #000;
    padding-bottom: 10px;
}

h1:before, h1:after {
    content: "";
    display: block;
    width: 50px;
    height: 5px;
    background-color: #000;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

h1:before {
    left: 0;
}

h1:after {
    right: 0;
}
   

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .row {
            margin-right: -20px;
            margin-left: -20px;
        }

        .col-md-4 {
            padding-right: 20px;
            padding-left: 20px;
        }

        section.container {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
  </style>
  <title>DevPub - Membros</title>
</head>

<body>
<?php require("components/menu.php") ?>

  <section class="container bg-light pl-5 pr-5 rounded mt-4 mb-4">
        <div class="row m-3">
            <div class="col-md-12">
                <h1 class="text-center">Conheça os membros da nossa equipe de desenvolvimento</h1>
            </div>
            <hr>
        </div>

        <div class="row justify-content-around">
            
            <div class="col-md-9">
                <div class="team-member">
                    <img src="/Imagens/hidro.jpeg" alt="Lider Supremo, detentor de todas as honras, pois foi ele que fez tudo que você terá acesso nesse site, é por causa dele que você está podendo acessar essa perfeição em forma de plataforma para estudos tecnologicos">
                    <h3>João Gabriel</h3>
                    <h5><b>Cargos:</b> Desenvolvedor, Designer, Tester, Programador, Redator, Projetista</h5>
                    <p class="alert alert-dark"> (A única coisa que eu não fiz nesse site foi desistir, de resto eu fiz tudo)</p>
                </div>
            </div>

            
        </div>
         <div class="row justify-content-around">
         <div class="col-md-3">
                <div class="team-member">
                    <img src="/Imagens/gustavo.jpeg" alt="Foto do membro da equipe 3">
                    <h4>Gustavo Barbosa</h4>
                    <h5><b>Cargo:</b> Redator</h5>
                    <h6 class="alert alert-dark">Fake Natty</h6>
                </div>
            </div>
         <div class="col-md-3">
                <div class="team-member">
                    <img src="/Imagens/eduardi.jpeg" alt="Foto do membro da equipe 2">
                    <h4>Eduardo Viana</h4>
                    <h5><b>Cargo:</b> Designer</h5>
                    <h6 class="alert alert-dark">Fake Natty</h6>
                </div>
            </div>

            <div class="col-md-3">
                <div class="team-member">
                    <img src="/Imagens/mario.jpg" alt="Foto do membro da equipe 1">
                    <h4>Mário Vinicius</h4>
                    <h5><b>Cargo:</b> Projetista</h5>
                    <h6 class="alert alert-dark">Fake Natty</h6>
                </div>
            </div>

            <div class="col-md-3">
                <div class="team-member">
                    <img src="/Imagens/helena.jpeg" alt="Foto do membro da equipe 2">
                    <h4>Helena Marinho</h4>
                    <h5><b>Cargo:</b> Redatora Aux.</h5>
                    <h6 class="alert alert-dark">Fake Natty</h6>
                </div>
            </div>

        </div>
    </div>

  </section>

    
  <?php require("components/footer.php") ?>

<?php require("components/javascript_links.php") ?>
</body>

</html>