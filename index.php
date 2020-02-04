<?php


require __DIR__ . '/vendor/autoload.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/films', function(){
	echo 'Бэтмэн 1';
});

$app->get('/actors', function(){
	echo 'Кристиан Бэйл';
});

$app->run();
