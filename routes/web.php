<?php
namespace Routes;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;



// Routes system
$routes = new RouteCollection();

$routes->add('home', new Route(
  constant('URL_SUBFOLDER') . 'mvc/', 
  array('controller' => 'HomeController', 'method' => 'home'), 
  array() 
));

$routes->add('posts', new Route(
  constant("URL_SUBFOLDER") . "mvc/posts",
  array('controller'=> 'PostController', 'method'=> 'index' ),
  array()
));

$routes->add('post', new Route(
  constant("URL_SUBFOLDER") . "mvc/posts/new",
  array('controller'=> 'PostController', 'method'=> 'new' ),
  array()
));

$routes->add('create_post', new Route(
  constant('URL_SUBFOLDER') . "mvc/posts/create",
  array('controller'=> 'PostController', 'method'=> "create"),
  array()
));

$routes->add('show_post', new Route(
  constant('URL_SUBFOLDER') . "mvc/posts/{id}",
  array('controller'=> 'PostController', 'method'=> "show"),
  array('id'=> '[0-9]+')
));


// $routes->add('new_product', new Route(
//   constant('URL_SUBFOLDER'). '/mvc/products/new', 
//   array('controller'=>'ProductController', 'method'=>'new'), 
//   array() 
// ));

// $routes->add('create_product', new Route(
//   constant('URL_SUBFOLDER'). '/mvc/products/create', 
//   array('controller'=>'ProductController', 'method'=>'create'), 
//   array(), array(), '', array(), array('POST') 
// ));

// $routes->add('product', new Route(
//   constant('URL_SUBFOLDER') . '/mvc/products/{id}', 
//   array('controller'=> 'ProductController', 'method' => 'show' ), 
//   array('id'=> '[0-9]+') 
// ));




