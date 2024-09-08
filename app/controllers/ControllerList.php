<?php

namespace app\controllers;

session_start();
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
}
