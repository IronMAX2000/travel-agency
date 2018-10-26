<?php
require 'connection.php';
$app = new \atk4\ui\App('AirMaxik');
$app->initLayout('Centered');
$client  = new Client($db);
$form = $app->layout->add('Form');
session_start();
$form->setModel($client,['name','surname','age','gmail']);
      $client['city_id'] = $_SESSION['city_id'];
      $form->onSubmit(function($form) use($app){
        $form->model->save();

        return [$form->success('удачного полёта') , $app->jsRedirect(['index'])];
      });
