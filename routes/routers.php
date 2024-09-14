<?php
function load(string $controller, string $action)
{
    // ? Instanciando um Objeto e executando o método dele, o objeto e o método são informados através das váriaveis, $controller (Objeto) e $action (Método)
    try {
        $controllerNamespace = "app\\controllers\\{$controller}";

        // ? Verifica se existe a classe, e se não existir solta um erro;
        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe <br>");
        }

        // ? Instancia um objeto com a classe informada pelos parametros da função
        $controllerInstance = new $controllerNamespace();

        // ? Verifica se existe o método
        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("O metodo {$action} não existe no controller {$controller} <br>");
        }

        // * Executa o método
        $controllerInstance->$action((array)$_REQUEST);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
};
// * Array com o endereço de cada página 
$routes = [

    'GET' => [
        '/' => fn() => load("ControllerList", "index"),
        '/contact' => fn() => load('ControllerList', "suporte"),
        '/materiais' => fn() => load('ControllerList', "materiais"),
        '/usuario' => fn() => load('ControllerList', "usuario"),
        '/login' => fn() => load('ControllerList', "login"),
        '/cadastro' => fn() => load('ControllerList', "cadastro"),
        '/intro' => fn() => load('ControllerList', "intro"),
        '/equipe' => fn() => load('ControllerList', "equipe"),
       
        // ! Debug, ou operações
        '/logout' => fn() => load('ControllerList', "logout"),
        "/info"=> fn() => load("ControllerList", "info"),
        
        // ? Páginas Front-End
        '/html' => fn() => load('ControllerList', "html"),
        "/css"=> fn() => load("ControllerList", "css"),
        "/bootstrap"=> fn() => load("ControllerList", "bootstrap"),
        "/angular"=> fn() => load("ControllerList", "angular"),
        "/sass"=> fn() => load("ControllerList", "sass"),
        "/react"=> fn() => load("ControllerList", "react"),
       
        // ? Páginas Back-End
        '/sql' => fn() => load('ControllerList', "sql"),
        "/python"=> fn() => load("ControllerList", "python"),
        "/csharp"=> fn() => load("ControllerList", "csharp"),
        "/java"=> fn() => load("ControllerList", "java"),
        "/js"=> fn() => load("ControllerList", "js"),
        "/php"=> fn() => load("ControllerList", "php"),
    ],
    'POST' => [
        '/usuario' => fn() => load('FormList', "loginRequest"),
        "/cadastro" => fn() => load("FormList", "signUpRequest")
    ]

];
