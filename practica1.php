<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css'); ?>">
</head>
<body>

<section class="hero is-success">
		<div class="hero-body">
			<p class="title">
				formulario php
			</p>
			<p class="subtitle">
				Angel Eduardo Islas Salazar
			</p>
		</div>
	</section>

<div class="columns">
    <div class="column">
    </div>
      <div class="column">
        <form action="procesar.php" method="post">
            <div>
            <label>Nombre:</label>
            <input class="input is-primary" type="text" name="nombre">
            </div>
            <div>
            <label>Apellido Paterno:</label>
            <input class="input is-primary" type="text" name="apat">
            </div>
            <div>
            <label>Apellido Materno:</label>
            <input class="input is-primary" type="text" name="amat">
            </div>
            <div>
            <label>Correo electrónico:</label>
            <input class="input is-primary" type="email" name="email">
            </div>
            <div>
            <input type="submit" class="button is-link" value="Guardar">
            </div>
          </form>
       </div>
      <div class="column">
      </div>
</div>

	<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>practica con areglos</strong>
    </p>
  </div>
</footer>

</body>
</html>