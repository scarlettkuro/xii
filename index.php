<?php

require_once 'autoload.php'; //load app classes
require_once 'lib/limonade.php';

dispatch('/css/:css', 'AssetController::css');
dispatch('/js/:js', 'AssetController::js');

//ROUTES

dispatch_get('/', 'PostController::index'); 
dispatch_get('/new', 'PostController::neew'); //R
dispatch_get('/edit/:post', 'PostController::edit'); //R
dispatch_post('/:post', 'PostController::save'); //C, U
dispatch_get('/:post', 'PostController::post'); 
dispatch_post('/remove/:post', 'PostController::remove'); //D


run();
?>
