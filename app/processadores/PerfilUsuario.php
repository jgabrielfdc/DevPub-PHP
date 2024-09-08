<?php
namespace Perfil;



class Usuario
{
    private $salvos = [];

    public function __set($params, $attr)
    {
        $this->$attr = $params;
    }
    public function __get($attr)
    {
        return $this->$attr;
    }
}

class Layouts extends Usuario
{
    public function cardsSalvos($attr)
    {
        $conta = 0;
        for ($i = 0; $i < 1; $i++) {
            echo '<div style="padding: 16px" class="row justify-content-around my-2">';
            if ($i > 2) {
                break;
            }
            foreach ($this->$attr as $salvo) {
                $conta++;
                if ($conta >= 7) {
                    break;
                }
                echo '<div class="col-md-3 mx-1 col-sm-8 mb-1 text-light bg-dark rounded border border-dark disquete">
                                    <div class="w-100 icone col-12 border border-light bg-light text-dark text-center">
                                        <h3 class="my-3">' . $salvo['materia'] . '</h3>
                                    </div>
                                    <hr>
                                    <h5 class="font-weight-bold col-12 text-center bg-secondary text-light rounded small">' . $salvo['tipo'] . '</h5>
                                    <a class="btn btn-outline-light btn-lg col-12 my-2" href="' . $salvo['link'] . '">Continuar</a>
                                </div>';
            }

        }
    }

    public function feedCards($attr)
    {
        if (count($this->$attr) > 6) {
            echo 6;
        } else {
            echo count($this->$attr);
        }
    }
}
?>