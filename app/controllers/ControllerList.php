<?php

namespace app\controllers;

session_start();
$_SESSION["historico"];
$_SESSION['historico']=(array) $_SESSION['historico'];
class ControllerList
{
    // !  Redirecionamentos por GET
    public function index()
    {
        return Controller::view('home');
    }
    public function suporte()
    {
        return Controller::view("suporte");
    }
    public function materiais()
    {
        return Controller::view("materiais");
    }
    public function usuario()
    {
        return Controller::view("usuario");
    }
    public function login()
    {
        return Controller::view("login");
    }

    public function cadastro()
    {
        return Controller::view("cadastro");
    }

    public function html()
    {
        return Controller::view("html");
    }

    public function intro()
    {
        return Controller::view("intro");
    }

    public function equipe()
    {
        return Controller::view("equipe");
    }
    public function sql()
    {
        return Controller::view("sql");
    }

    public function logout(){
        $_SESSION['autenticado']=false;
        return Controller::view("home");
    }
    public function info(){
        return Controller::view("info");
    }
    public function css(){
        return Controller::view("css");
    }
    public function bootstrap(){
        return Controller::view("bootstrap");
    }
    public function angular(){
        return Controller::view("angular");
    }

    public function sass(){
        return Controller::view("sass");
    }
    public function react(){
        return Controller::view("react");
    }
}
