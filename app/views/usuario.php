<?php
require("../app/processadores/PerfilUsuario.php");
use Perfil\Layouts;
$usuario = new Layouts();

$salvos = [
    ['materia' => 'HTML', 'tipo' => 'Linguagem de Marcação', 'link' => '/html'],
    ['materia' => 'SQL', 'tipo' => 'Linguagem de Programação', 'link' => '/sql'],
    ['materia' => 'SQL', 'tipo' => 'Linguagem de Programação', 'link' => '/sql'],
    ['materia' => 'SQL', 'tipo' => 'Linguagem de Programação', 'link' => '/sql'],
    ['materia' => 'SQL', 'tipo' => 'Linguagem de Programação', 'link' => '/sql'],
    ['materia' => 'SQL', 'tipo' => 'Linguagem de Programação', 'link' => '/sql'],
];
$usuario->__set($salvos, "salvos");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include("components/header_links.php") ?>

    <style>

    </style>
    <title>Guia de Estudos Júnior</title>
</head>

<body>

    <!--Cabeçalho-->
    <?php require("components/menu.php") ?>

    <section id="usuario" class="py-md-5 bg-sky">
        <div class="container bg-light p-5 py-5 h-100">
            <h1>Perfil do Estudante</h1>

            <div class="row">
                <div class="col-md-4 text-sm-center mb-sm-2 mt-sm-0">
                    <img src="/Imagens/eduardi.jpeg" alt="Foto do Estudante" class="img-thumbnail bg-secondary rounded">
                </div>
                <div class="col-md-8">
                    <h2>Eduardo Nascimento Viana</h2>
                    <p>Data de Criação: 15/06/2024</p>
                    <p>Ultima Sessão: 17/06/2024</p>
                    <p>Email: Aberto</p>
                    <p>Area de Interesse: Aberto</p>
                </div>
            </div>

            <hr>

            <h2>Sobre Mim</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dui euismod, porta eros vel,
                efficitur lectus. Sed non dui eget lorem aliquam ullamcorper sit amet non mauris. Vestibulum ante ipsum
                primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit lectus, tincidunt quis
                ornare ac, semper eget orci. Maecenas sit amet diam ac leo semper eleifend. Morbi at lectus velit. Sed
                sit amet augue ac erat tincidunt ullamcorper. Nullam et magna euismod, varius quam et, tincidunt elit.
            </p>

            <hr>

            <div class="alert alert-secondary">
                <h4 class="text-sm-center alert alert-dark rounded medium">Ultimas Tecnologias Pesquisadas: <span
                        class="badge badge-dark"><?php $usuario->feedCards("salvos"); ?>/6</span> </h4>

                <div class="container-fluid historico">
                    <div class="row px-1 justify-content-around">
                        <div class="col-12">
                            <?php
                            $usuario->cardsSalvos("salvos");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2>Relatório de Progresso</h2>

        <div class="row">
            <div class="col-md-6">
                <h3>Tempo de Uso</h3>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                        75%
                    </div>
                </div>
                <p>Tempo total: 2 horas e 30 minutos</p>
                <p>Data: 17/06/2024</p>
            </div>

            <div class="col-md-6">
                <h3>Exercícios Concluídos</h3>
                <h1 class="display-4">250</h1>
                <p>Distribuição por Matéria:</p>
                <div class="chart-pie">
                </div>
            </div>
        </div>

        <hr>

        <h3>Progresso por Matéria</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tecnologia</th>
                    <th>Total</th>
                    <th>Concluídos</th>
                    <th>Progresso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>HTML</td>
                    <td>100</td>
                    <td>85</td>
                    <td>85%</td>
                </tr>
                <tr>
                    <td>CSS</td>
                    <td>50</td>
                    <td>30</td>
                    <td>60%</td>
                </tr>
                <tr>
                    <td>Bootstrap</td>
                    <td>75</td>
                    <td>52</td>
                    <td>69%</td>
                </tr>
            </tbody>
        </table>

        <hr>

        </div>
        </div>

    </section>

    <?php require("components/footer.php"); ?>
    <?php require("components/javascript_links.php") ?>
</body>

</html>