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

$app->run();
