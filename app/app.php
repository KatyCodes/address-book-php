<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AddressBook.php";
    date_default_timezone_set('America/Los_Angeles');

    session_start();
    if (!empty($_SESSION['allAddresses'])){
      $_SESSION['allAddresses'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array ( 'twig.path' => __DIR__.'/../views'
  ));
    $app->get("/", function() use ($app) {
      return $app['twig']->render('home.html.twig');
    });

    $app->post("/confirm_address", function() use ($app){
      $new_address = new AddressBook($_POST["name"], $_POST["streetAddress"], $_POST["city"], $_POST["state"], $_POST["zip"]);
      return $app['twig']->render('confirm.html.twig', array("newaddress" => $new_address));
    });

    return $app;
 ?>
