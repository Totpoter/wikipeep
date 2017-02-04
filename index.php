<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () use($app) {
  $app->render('index.php');
});

$app->get('/bibliotek', function () use($app) {
  $app->render('library.php');
});

$app->get('/forum', function () use($app) {
  $app->render('forum.php');
});

$app->get('/kurser', function () use($app) {
  $app->render('courses.php');
});

$app->run();
