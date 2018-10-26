<?php
require 'connection.php';
$app = new \atk4\ui\App('AirMaxik');
$app->initLayout('Centered');
session_start();
$country = new Country($db);
$country->load($_SESSION['country_id']);
$city= $country->ref('City');
$city->setOrder('name');
$table = $app->add('Grid');
$table->setModel($city);

$table->addDecorator('name', new \atk4\ui\TableColumn\Link('fast2.php?id={$id}'));
