<?php
$id=$_GET['id'];
session_start();
$_SESSION['city_id']=$id;
header('Location: client.php');
