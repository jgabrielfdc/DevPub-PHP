<?php 
require "../vendor/autoload.php";
require "../routes/routers.php";


try{
    //? Ele pega primeiro o endereço requirido (por exemplo: a página /html, ou a página /login)
    $uri=parse_url($_SERVER['REQUEST_URI'])['path'];
    //? Depois ele pega o tipo de requisição, POST / GET
    $request=$_SERVER['REQUEST_METHOD'];

    // !Está verificando se existe essa rota, por exempo se existe a Rota do GET ou do POST
    if(!isset($routes[$request])){
        throw new Exception('não existe essa rota');
    }

    // ? Verificando se existe o endereço da página, para aquele tipo de rota
    if(!array_key_exists($uri,$routes[$request])){
        throw new Exception("Não Existe essa pagina");
    }

    // * Executa a Rota
   $controller=$routes[$request][$uri];
   $controller(); 
}catch(Exception $e){
    $e->getMessage();
}