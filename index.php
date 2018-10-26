<?php
require 'connection.php';
$app = new \atk4\ui\App('AirMaxik');
$app->initLayout('Centered');
 $image='http://russia-karta.ru/russia-map-10.jpg';
 $app->add(['Image',$image]);


$country = new Country($db);
$country->setOrder('name');
$table = $app->add('Grid');
$table->setModel($country);

$table->addDecorator('name', new \atk4\ui\TableColumn\Link('fast.php?id={$id}'));
