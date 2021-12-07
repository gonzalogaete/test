<!DOCTYPE html>
<?php include "header.php"; ?>

<body>
	<br>
	<h1 Style="text-align : center;"> DISPONIBLES </h1>
	</br>
	<section class="album py-4 bg-light">
                <div class="container">
                        <div class = "row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


	<a href="libro1.php">
	 <div class="col">
	 <div class="card shadow-sm">
	 <div class="card-body">
		 <img src="https://i.imgur.com/CBiMNSt.jpg" width="390" height="420" >
		 <p class="card-text">Darling in the franXX</p>
		  <p class="card-text">Code 000</p>
		  <div class="d-flex justify-content-between align-items-center">
        </div>
	</div>
	</div>
	</div>
	</a>	

	<a href="libro2.php">
         <div class="col">
         <div class="card shadow-sm">
         <div class="card-body">
                 <img src="https://i.imgur.com/LjMs9WU.jpeg" width="390" height="420" >
                  <p class="card-text">Among Us Comic</p>
                  <p class="card-text">Anonymous</p>
                  <div class="d-flex justify-content-between align-items-center">
        </div>
        </div>
        </div>
        </div>
        </a> 

	<a href="libro3.php">
         <div class="col">
         <div class="card shadow-sm">
         <div class="card-body">
                 <img src="https://i.imgur.com/vCTGxc0.jpeg" width="390" height="420" >
                  <p class="card-text">Hunter X Hunter</p>
                  <p class="card-text">Yoshiro Togashi</p>
                  <div class="d-flex justify-content-between align-items-center">
        </div>
        </div>
        </div>
        </div>
        </a> 

	<a href="libro4.php">
         <div class="col">
         <div class="card shadow-sm">
         <div class="card-body">
                 <img src="https://i.imgur.com/5xRH8gP.jpeg" width="390" height="420" >
                  <p class="card-text">Demon Slayer</p>
                  <p class="card-text">Koyoharu Hotouge</p>
                  <div class="d-flex justify-content-between align-items-center">
        </div>
        </div>
        </div>
        </div>
        </a>
	<input type="hidden" name="email" id="exampleinput" value= "<?php_echo($_POST['email'])?>">
	<input type="hidden" name="pass" id="exampleinput" value= "<?php_echo($_POST['pass'])?>">

<?php
require 'vendor/autoload.php';

$client= new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->biblioteca->usuarios;
$insertOneResult = $collection -> insertOne ([
'email' ->$_POST['email'],
'password' ->$_POST['pass'],
])
?>
</body>
</main>

<?php include "foother.php"; ?>

