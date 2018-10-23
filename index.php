<?php
require 'connection.php';
$app = new \atk4\ui\App('AirMaxik');
$app->initLayout('Centered');

$CRUD= $app->add(['CRUD']);
$CRUD->setModel(new Client($db));

$CRUD= $app->add(['CRUD']);
$CRUD->setModel(new Contry($db));

$CRUD= $app->add(['CRUD']);
$CRUD->setModel(new City($db));
