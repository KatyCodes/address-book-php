<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AddressBook.php";
    date_default_timezone_set('America/Los_Angeles');

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array ( 'twig.path' => __DIR__.'/../views'
  ));
    $app->get("/", function() use ($app) {
      return $app['twig']->render('home.html.twig');
    });

    $app->post("/confirm_address", function() use ($app){
      $new_address = new AddressBook($_POST["name"]);
      return $app['twig']->render('confirm.html.twig', array("address" => $new_address));
    });

    return $app;
 ?>
