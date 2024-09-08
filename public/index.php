<?php 
require "../vendor/autoload.php";
require "../routes/routers.php";

try{
    $uri=parse_url($_SERVER['REQUEST_URI'])['path'];
    $request=$_SERVER['REQUEST_METHOD'];
    if(!isset($routes[$request])){
        throw new Exception('não existe essa rota');
    }

    if(!array_key_exists($uri,$routes[$request])){
        throw new Exception("Não Existe essa pagina");
    }

   $controller=$routes[$request][$uri];
   $controller(); 
}catch(Exception $e){
    $e->getMessage();
}