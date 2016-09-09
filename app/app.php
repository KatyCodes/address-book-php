<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";
    date_default_timezone_set('America/Los_Angeles');

    session_start();

    if (empty($_SESSION['contacts'])){
      $_SESSION['contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array ( 'twig.path' => __DIR__.'/../views'
  ));
    $app->get("/", function() use ($app) {
      return $app['twig']->render('home.html.twig', array('contact' => Contact::getAll()));
    });

    $app->post("/confirm_address", function() use ($app){
      $new_contact = new Contact($_POST['name'], $_POST['streetAddress'], $_POST['city'], $_POST['state'], $_POST['zip']);
      return $app['twig']->render('confirm.html.twig', array("contacts" => $new_contact));
    });

    $app->post("/delete", function() use ($app){
      Contact::deleteAll();
      return $app['twig']->render('delete.html.twig');
    });

    return $app;
 ?>
