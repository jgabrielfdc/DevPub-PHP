<?php
namespace app\controllers;
if (!isset($_SESSION)) {
  session_start();
}
require("../app/controllers/Connection.php");
use app\controllers\Connection as Connect;
class FormList extends ControllerList
{
  /*public function login($params)
  {
  }*/
  public function loginRequest($params)
    {
      //$_SESSION['historico']=(array)$_SESSION['historico'];
      $_SESSION['autenticado']=true;
      $dados=(array)$params;
      return $this->usuario($dados);
    }

    //TODO: Requisição para cadastro de novo usuario no banco de dados
  /*public function signUpRequest($params){
    $converter=$params;
    $converter=(array)$converter;
    $dadosRegistro=implode(",",$converter);
    insert($dadosRegistro,"usuarios","nome,'email','senha','area_interesse");
     return Controller::view("cadastro");
  }*/
  
}