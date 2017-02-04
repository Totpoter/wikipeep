<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();


  $app->get('/', function () use($app) {
    $app->render('index.php');
  })->name('hem');



  $app->get('/bibliotek', function () use($app) {
    $app->render('library.php');
  })->name('bibliotek');



  $app->get('/forum', function () use($app) {
    $app->render('forum.php');
  })->name('forum');



  $app->get('/kurser', function () use($app) {
    $app->render('courses.php');
  })->name('kurser');



  $app->get('/login', function () use($app) {
    $app->render('login.php');
  })->name('login');

  $app->post('/login', function () use($app) {
    $email = $app->request->post('email');
    $password = $app->request->post('password');

    // Hej Niklas, skriv vanliga login koden som du kan
    // Men använd bara variablarna åvanför istället

  });



  $app->get('/register', function () use($app) {
    $app->render('register.php');
  })->name('register');

  $app->post('/register', function () use($app) {
    $fname = $app->request->post('fname');
    $uname = $app->request->post('uname');
    $email = $app->request->post('email');
    $password = $app->request->post('password');
    $repassword = $app->request->post('repassword');

    // Hej Niklas, skriv vanliga login koden som du kan
    // Men använd bara variablarna åvanför istället

  });

$app->run();
