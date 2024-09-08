<?php
namespace app\controllers;
session_start();
class FormList
{
  public function login($params)
  {
  }
  public function loginRequest($params)
    { $_SESSION['autenticado']=true;
      if($_SESSION['autenticado']==true){
        header("Location:/usuario");
      }else{
        return Controller::view("login");
      }
    }
}