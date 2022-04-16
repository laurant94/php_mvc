<?php
namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class HomeController{
  function home(RouteCollection $routes){
    $title = "Home";

    require_once APP_ROOT . "/views/home/home.php";
  }
}