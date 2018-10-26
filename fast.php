<?php
$id=$_GET['id'];
session_start();
$_SESSION['country_id']=$id;
header('Location: city.php');
