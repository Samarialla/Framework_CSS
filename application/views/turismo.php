<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turismo</title>
		<!--	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/estilos.css">-->

    <!--materialize-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/materialize.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/turismo.css">

    <script src="<?php echo base_url() ?>assets/js/materialize.js"></script>
      <script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>

			<!--fontawesome-->
			<link rel="stylesheet" type="text/css" href="assets/css/all.css">
    	<script src="<?php echo base_url(); ?>assets/js/all.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>


  </head>
  <body id="body" class="container">
    <header>
      <div class="row">
        <div class="col s2">
          <img id="logo" src="<?php echo base_url(); ?>assets/images/logo.png" class="responsive-img"/>
        </div>
        <div class="col s6 offset-s4">
          <a id="boton" class="waves-effect waves-light btn-small"><i class="fas fa-home"></i>Inicio</a>
          <a id="boton" class="waves-effect waves-light btn-small"><i class="fas fa-location-arrow"></i>Estuve aqui</a>
          <a id="boton" class="waves-effect waves-light btn-small"><i class="fas fa-place-of-worship"></i>Mejores Viajes</a>
          <a id="boton" class="waves-effect waves-light btn-small"><i class="fab fa-angellist"></i>Recomentaciones</a>


        </div>
      </div>
    </header>

  </body>
</html>
