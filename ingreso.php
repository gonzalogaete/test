<!DOCTYPE html>

<?php include "header.php"; ?>

<body>
		
	<div class="bd-example">

	<form method="POST" action="checklogin.php">

	<div class="mb-3">
	<label for="user" class="form-label"> Username </label>
	<input type="text" name="user" class="form-control" id="exampleinput" aria-describedby="userhelp">
	</div>

	<div class="mb-3">
	<label for="example password" class="form-label">contraseña</label>
	<input type="password" name="pass" class=form-control" id="examplepassword">
	</div>

	<button type="submit" class="btn btn-primary" value="enviar" > Ingresar</button>
	</form>
</div>


</div>
</body>

<?php include"foother.php"; ?>
