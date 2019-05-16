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
          <div id="letra" class="col s6">
            <h4>Creando mi propio camino</h4>
         </div>
      </div>
      <div class="row">

      </div>
    </header>
    <div class="row">
    <div class="col s1">
      <ul>
      <li ><i id="icon" class="fab fa-instagram"></i></li>
      <li><i id="icon" class="fab fa-facebook-square"></i></li>
      <li><i id="icon" class="fab fa-twitter"></i></li>
      <li><i id="icon" class="fab fa-youtube"></i></li>
      <li><i id="icon" class="fas fa-camera-retro"></i></li>
    </ul>
    </div>

    <div class="col s3">
      <img id="image1" src="<?php echo base_url(); ?>assets/images/buceo.jpg" class="responsive-img"/>
      <img id="image2" src="<?php echo base_url(); ?>assets/images/calles.jpg" class="responsive-img"/>
    </div>
    <div class="col s4">
      <img id="image3" src="<?php echo base_url(); ?>assets/images/iglesia.jpg" class="responsive-img"/>
    </div>
    <div class="col s3">
      <img id="image4" src="<?php echo base_url(); ?>assets/images/egipto.jpg" class="responsive-img"/>
      <img id="image4" src="<?php echo base_url(); ?>assets/images/iglesia.jpg" class="responsive-img"/>
      <img id="image4" src="<?php echo base_url(); ?>assets/images/calles.jpg" class="responsive-img"/>
    </div>

  </div>
    <div class="row">
      <div class="col s12">
      <div>
    </div>
  </body>
</html>
