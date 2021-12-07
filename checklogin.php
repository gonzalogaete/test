<?php

require 'vendor/autoload.php';
session_start();

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->biblioteca->usuarios;

$user = $collection->findOne(['user' => $_POST['user'], 'pass' => $_POST['pass']]);

$esta=false;
if(isset($user->email)){
      $esta=true;
      $_SESSION['user'] = $user;
}

if($esta){
      header('Location: home.php');
}
else{
      header('Location: ingreso.php');
}
?>*/

