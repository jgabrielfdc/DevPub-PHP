<?php
namespace Perfil;
function cardsSalvos($attr): void
{
    if (isset($attr)) {
        $conta = 0;
        for ($i = 0; $i < 1; $i++) {
            echo '<div style="padding: 16px" class="row justify-content-around my-2">';
            if ($i > 2) {
                break;
            }
            foreach ($attr as $salvo) {
                $conta++;
                if ($conta >= 7) {
                    break;
                }
                echo '<div class="col-md-3 col-sm-8 mx-1 my-3 mb-1 text-light bg-dark rounded border border-dark disquete">
                                    <div class="w-100 icone col-12 border border-light bg-light text-dark text-center">
                                        <h3 class="my-3">' . $salvo['materia'] . '</h3>
                                    </div>
                                    <hr>
                                    <h5 class="font-weight-bold col-12 text-center bg-secondary text-light rounded small">' . $salvo['tipo'] . '</h5>
                                    <a class="btn btn-outline-light btn-lg col-12 my-2" href="' . $salvo['link'] . '">Continuar</a>
                                </div>';
            }
        }
        echo "</div>";
    } else {
        echo "<h2>Sem Historico ainda</h2>";
    }
}
function feedCards($attr)
{
    if (!isset($attr) || empty($attr)) {
        echo 0;
    } else {
        if (count($attr) > 6) {
            echo 6;
        } else {
            echo count($attr);

        }
    }
}

function validaHistorico($valor): void
{
    if (!array_search($valor, $_SESSION['historico'], true)) {
        array_unshift($_SESSION['historico'], $valor);
    }else{
        array_unshift($_SESSION['historico'], $valor);
    }
    $_SESSION['historico']=array_unique($_SESSION['historico'],SORT_REGULAR);
}

?>