<!DOCTYPE html>
<?php include "header.php"; ?>

<body>
	<div class="modal-content rounded-5 shadow">

	<div class="modal-header p-5 pb-4 border-bottom-0">
	<h2 class="fw-bold mb-0">Registro</h2>
	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>

        <form method="POST" action="home.php">
	<div class="modal-body p-5 pt-0">
	<form class="">
	<div class="form-floating mb-3">
	<input type="email" name="email " class="form-control rounded-4" id="floatingInput" placeholder="nombre@ejemplo.com">
	<label for="floatingInput">Usuario</label>
	</div>

	<div class="form-floating mb-3">
	<input type="password" name="pass" class="form-control rounded-4" id="floatingPassword" placeholder="Contraseña">
	<label for="floatingPassword">Contraseña</label>
	</div>

        <button type="submit" value="enviar"> Registrarse </button>
	</form>	
	</div>
	</div>

</body>

<?php include "foother.php"; ?>

