<?php
namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class PostController{
  function index(RouteCollection $routes){
    global $db;
    $title = "mes publications";
    $posts = $db->table('posts')->get();

    require_once APP_ROOT . "/views/posts/index.php";
  }

  function new(RouteCollection $routes){
    $title = "Nouvelle publication";
    $path = $routes->get('create_post')->getPath();

    require_once APP_ROOT . "/views/posts/new.php";
  }

  function create(RouteCollection $routes){
    $request = request();
    global $db;
    $row = $db->insert('posts', [
      "title"=> $request->get('title'),
      'description'=> $request->get('description'),
      "price"=> $request->get('price'),
      "sku"=> $request->get('sku')
    ]);

    if($row){
      $redirect = str_replace('{id}', $row, $routes->get('show_post')->getPath() );

      echo $redirect;
      header("location: $redirect");
    }
  }

  function show(int $id, RouteCollection $routes){
    global $db;
    $post = $db->table('posts')->where($id)->get()->first();

    require_once APP_ROOT . '/views/posts/show.php';
  }
}