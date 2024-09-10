<?php
function load(string $controller, string $action)
{
    try {
        //se o controller existe
        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe <br>");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("O metodo {$action} não existe no controller {$controller} <br>");
        }

        $controllerInstance->$action((object)$_REQUEST);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
};
$routes = [

    'GET' => [
        '/' => fn() => load("ControllerList", "index"),
        '/contact' => fn() => load('ControllerList', "suporte"),
        '/materiais' => fn() => load('ControllerList', "materiais"),
        '/usuario' => fn() => load('ControllerList', "usuario"),
        '/login' => fn() => load('ControllerList', "login"),
        '/cadastro' => fn() => load('ControllerList', "cadastro"),
        '/html' => fn() => load('ControllerList', "html"),
        '/intro' => fn() => load('ControllerList', "intro"),
        '/equipe' => fn() => load('ControllerList', "equipe"),
        '/sql' => fn() => load('ControllerList', "sql"),
        '/logout' => fn() => load('ControllerList', "logout"),
        "/info"=> fn() => load("ControllerList", "info"),
        "/css"=> fn() => load("ControllerList", "css"),
        "/bootstrap"=> fn() => load("ControllerList", "bootstrap"),
        "/angular"=> fn() => load("ControllerList", "angular"),
        "/sass"=> fn() => load("ControllerList", "sass"),
        "/react"=> fn() => load("ControllerList", "react"),
    ],
    'POST' => [
        '/loginRequest' => fn() => load('FormList', 'loginRequest')
    ]

];
