<?php
namespace app\controllers;

use League\Plates\Engine;

abstract class Controller
{
  public static function view(string $view, array $data = [])
  {
    $viewsPath = dirname(__FILE__, 2) . "/views";

    if (!file_exists($viewsPath . "/" . $view . ".php")) {
      throw new \Exception("Não existe essa View<br>");
    }
    $templates = new Engine($viewsPath);
    echo $templates->render($view, (array)$data);
  }
  public static function login()
  {   }
}
