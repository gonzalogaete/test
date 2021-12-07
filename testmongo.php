<?php
	require'vendor/autoloead.php'

	$client=new MongoDB\Client("mongodb://localhost:27017"):
	$collection = $client->biblioteca->usuarios;

	$cursor= $collection->find();

	foreach($cursor as $usuario){
		var_dump($usuario);
	};

?>
