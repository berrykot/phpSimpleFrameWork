<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();

$app->get('/', function () {
 include('mainPage.html');
});

$app->get('/films', function(){
	$films = getFilms();
	header('Content-Type: application/json; charset=UTF-8');
 	echo json_encode($films, JSON_PRETTY_PRINT);
});

$app->get('/film/:id', function($id){
	$films = getFilms();
	$film = $films[$id-1];
	header('Content-Type: application/json; charset=UTF-8');
 	echo json_encode($film, JSON_PRETTY_PRINT);
});

$app->get('/hello/:name', function ($name) {
	echo "Hello, " . $name;
});


$app->run();


function getFilms(){
	return [
		[
			'id' => '1',
			'Name' => 'Film1',
			'Description' => 'Desc1'
		],
		[
			'id' => '2',
			'Name' => 'Film2',
			'Description' => 'Desc2'
		],
		[
			'id' => '3',
			'Name' => 'Film3',
			'Description' => 'Desc3'
		],
	];
}
