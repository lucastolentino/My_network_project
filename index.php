<?php
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/system/config.php";

$app = new \Slim\App();

$app->get('/','\DEV\Controllers\HomeController:login');
$app->get('/feed','\DEV\Controllers\HomeController:feed');
$app->get('/feed/{usuario:[a-zA-z0-9_]+}', '\DEV\Controllers\HomeController:feed_usuario');
$app->get('/configuracao', '\DEV\Controllers\HomeController:configuracao');
$app->get('/pesquisa', '\DEV\Controllers\HomeController:pesquisa');
$app->get('/mensagens', '\DEV\Controllers\HomeController:mensagens');
$app->get('/fotos', '\DEV\Controllers\HomeController:fotos');


$app->run();

?>