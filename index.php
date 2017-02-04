<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () use($app) {
  $app->render('index.php');
});

$app->get('/bibliotek', function () {
  $app->render('library.php');
});

$app->get('/forum', function () {
  $app->render('forum.php');
});

$app->get('/kurser', function () {
  $app->render('courses.php');
});

$app->run();
