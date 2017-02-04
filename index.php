<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
  echo "Hello, $name";
});

$app->get('/', function () {
  echo "Start sidan";
});

$app->get('/bibliotek', function () {
  echo "Biblioteket";
});

$app->get('/forum', function () {
  echo "Forumet";
});

$app->get('/kurser', function () {
  echo "Kurser";
});

$app->run();
