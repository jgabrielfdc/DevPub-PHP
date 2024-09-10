<?php
//if (!array_key_exists(array_search($_SESSION['historico'], ['materia'=>'SQL',"tipo"=>"Linguagem de Programação","link"=>"/sql"]),$_SESSION['historico'])) {
array_push($_SESSION["historico"], ['materia' => 'Angular', "tipo" => "Framework", "link" => "/angular"]);
//}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include("components/header_links.php") ?>
    <title>Guia de Estudos Júnior</title>
</head>

<body>
    <!--Cabeçalho-->
    <?php require("components/menu.php") ?>

    <section id="wiki">
        <div id="conteudos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <center>
                            <h1>Em Breve...</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed-bottom mb-0 p-0" style="background-color:#000;">
    <?php require("components/footer.php") ?>
    </div>
    <?php require("components/javascript_links.php") ?>
</body>

</html>