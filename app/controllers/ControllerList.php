<?php

namespace app\controllers;

use Error;
use Exception;

require("../app/processadores/PerfilUsuario.php");
use function Perfil\validaHistorico;
if (!isset($_SESSION)) {
    session_start();
} else {
    $_SESSION['autenticado'] = false;
}


class ControllerList
{
    // !  Redirecionamentos por GET 
    // * (URL, Link)
    public function index($params)
    {
        if (isset($_SESSION['historico'])) {
            $_SESSION['historico'] = (array) $_SESSION['historico'];
        }
        return Controller::view('home', $params);
    }
    public function suporte($params)
    {
        return Controller::view("suporte", $params);
    }
    public function materiais($params)
    {
        return Controller::view("materiais",(array)$params);
    }
    public function usuario($params)
    {
           if($_SESSION['autenticado']==true){
            $_SESSION['dataFimSessao']=Date("d/m/Y");
            $_SESSION['historico']=(array) $_SESSION['historico'];
            return Controller::view("usuario",(array)$params);
           }else{
            return Controller::view('login',(array)$params);
           }
    }
    public function login($params)
    {
        return Controller::view("login",(array)$params);
    }

    public function cadastro($params)
    {
        return Controller::view("cadastro",(array)$params);
    }


    public function intro($params)
    {
        return Controller::view("intro",(array)$params);
    }

    public function equipe($params)
    {
        return Controller::view("equipe",(array)$params);
    }

    // ! Funções de Debug, ou executaveis
    public function logout($params)
    {
        $_SESSION['autenticado'] = false;
        $_SESSION['historico'] = null;
        return Controller::view('home',(array)$params);
    }
    public function info()
    {
        return Controller::view("info");
    }

    // * Páginas
    public function sql($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'SQL', "tipo" => "Linguagem de Programação", "link" => "/sql"]);
        }
        return Controller::view("sql",(array)$params);
    }
    public function css($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'CSS', "tipo" => "Linguagem de Estilização", "link" => "/css"]);
        }
        return Controller::view("css",(array)$params);
    }
    public function bootstrap($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'Bootstrap', "tipo" => "Framework", "link" => "/bootstrap"]);
        }
        return Controller::view("bootstrap",(array)$params);
    }
    public function angular($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'Angular', "tipo" => "Framework", "link" => "/angular"]);
        }
        return Controller::view("angular",(array)$params);
    }
    public function sass($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'Sass', "tipo" => "Biblioteca", "link" => "/sass"]);
        }
        return Controller::view("sass",(array)$params);
    }
    public function react($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'React', "tipo" => "Biblioteca", "link" => "/react"]);
        }
        return Controller::view("react",(array)$params);
    }
    public function html($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'HTML', "tipo" => "Linguagem de Marcação", "link" => "/html"]);
        }
        return Controller::view("html",(array)$params);
    }
    public function python($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'Python', "tipo" => "Linguagem de Programação", "link" => "/python"]);
        }
        return Controller::view("python",(array)$params);
    }

    public function js($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'JavaScript', "tipo" => "Linguagem de Programação", "link" => "/js"]);
        }
        return Controller::view("js",(array)$params);
    }

    public function java($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'Java', "tipo" => "Linguagem de Programação", "link" => "/java"]);
        }
        return Controller::view("java",(array)$params);
    }

    public function csharp($params)
    {
        if (isset($_SESSION['historico']) && $_SESSION['autenticado'] == true) {
            validaHistorico(['materia' => 'C-Sharp', "tipo" => "Linguagem de Programação", "link" => "/csharp"]);
        }
        return Controller::view("csharp",(array)$params);
    }
}
