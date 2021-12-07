<!DOCTYPE html>
<html>

<?php include "header.php"; ?>


<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="css/style.css" type="text/css">

	<br>
	
  <div class="container">
  <legend>Admin Zone</legend>
	</br</br>
	<form>
		  <legend> Datos del libro a subir </legend>
  <p>
  <div class="mb-3">
  <label for="input" class="form-label" >Nombre libro</label>
  <input type="text" id="input"class="form-control" placeholder="Dragon Ball Manga">
  </div>
  </p>
  <p>
  <div class="mb-3">
  <label for="autor" class="form-label"> Autor</label>
  <input type="text" id="autor"class="form-control" placeholder="Akira Toriyama">
  </div>
  </p>
  <p>
  <div class="mb-3">
  <label for="isbn" class="form-label" > ISBN </label>
  <input type="text" id="isbn" class="form-cotrol" placeholder="9999">
  </div>
  </p>
  <p>
  <div class="mb-3">
  <label for="formFile" class="form-label">Imagen del Libro</label> 
  <input class="form-control" type="file" id="formFile">
  </div> 
  </p>
  <a type="submit" class="btn btn-primary" href="respuesta.html">Subir Libro</a>

  </form>
</body>

<?php include "foother.php"; ?>

</html>
