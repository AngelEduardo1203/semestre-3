<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>empleoo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css'); ?>">
</head>
<body>

<section class="hero is-success">
		<div class="hero-body">
			<p class="title">
				ficha de personal
			</p>
		</div>
	</section>


<section class="section">
   <div class="columns">
      <div class="column is-one-third">
      <h1 class="title">Informacion Personal</h1>
          <?php 
          $nombre=$_POST['nombre']
          $sex=$_POST['sex']
          $apat=$_POST['ap']
          $amat=$_POST['am'] 
          $fecha=$_POST['fecha']
          $dom=$_POST ['dom']
          $estadoci=$_POST[' est']
          $curp=$_POST['curp']

          echo  $nombre." ".$sex." ".$apat." ".$amat." ".$fecha." ".$dom." ". $estadoci." ".$curp;
          ?>                 
      </div>
      <div class="column is-one-third">
      <h1 class="title">Datos de contacto</h1>     
            <?php
            $tel=$_POST['tel']
            $email=$_POST['email']
           
            echo $tel." ". $email;
            
            ?>
        <h1 class="title">Informacion de empresa</h1>
            <?php
            $cargo=$_POST['cargp']
            $rfc=$_POST['rfc']
            $escu=$_POST['esc']

            echo $cargo." ".$rfc." ".$escu;
            ?>
       </div>
      <div class="column is-one-third">
        <h1 class="title">referenicas:</h1>
        <?php
            $referencia=$_POST['ref']
            $opi=$_POST['opinion']

            echo $referencia." ".$opi;
        ?>

      </div>
  </div>
</section>

</body>
</html>