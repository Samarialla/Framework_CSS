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
  <body id="body" class="">
    <header>
      <div class="row">
        <div class="col l2 s4">
          <img id="logo" src="<?php echo base_url(); ?>assets/images/logo.png" class="responsive-img"/>

        </div>
        <div class="col l6 offset-l4 s6">
          <a id="boton" class="col l2 s6 waves-effect waves-light btn-small"><i class="fas fa-home"></i>Inicio</a>
          <a id="boton" class="col l2 s8 waves-effect waves-light btn-small"><i class="fas fa-location-arrow"></i>Estuve aqui</a>
          <a id="boton" class="col l2 s8 waves-effect waves-light btn-small"><i class="fas fa-place-of-worship"></i>Mejores Viajes</a>
          <a id="boton" class="col l2 s8 waves-effect waves-light btn-small"><i class="fab fa-angellist"></i>Recomentaciones</a>

        </div>
          <div id="letra" class="col l4 s10">
            <p class="col s12" id="titulo">Creando mi propio camino</p>
         </div>
      </div>
    </header>
    <div class="row">
    <div class="col l1 s1 hide-on-small-only">
      <ul>
      <li ><i id="icon" class="fab fa-instagram"></i></li>
      <li><i id="icon" class="fab fa-facebook-square"></i></li>
      <li><i id="icon" class="fab fa-twitter"></i></li>
      <li><i id="icon" class="fab fa-youtube"></i></li>
      <li><i id="icon" class="fas fa-camera-retro"></i></li>
    </ul>
    </div>

    <div class="col l3 s10 ">
      <img id="image1" src="<?php echo base_url(); ?>assets/images/buceo.jpg" class="responsive-img"/>
      <img id="image2" src="<?php echo base_url(); ?>assets/images/calles.jpg" class="responsive-img"/>
    </div>
    <div class="col l4 s10 ">
      <img id="image3" src="<?php echo base_url(); ?>assets/images/iglesia.jpg" class="responsive-img"/>
    </div>
    <div class="col l3 ">
      <img id="image4" src="<?php echo base_url(); ?>assets/images/egipto.jpg" class="responsive-img"/>
      <img id="image4" src="<?php echo base_url(); ?>assets/images/iglesia.jpg" class="responsive-img"/>
      <img id="image4" src="<?php echo base_url(); ?>assets/images/calles.jpg" class="responsive-img"/>
    </div>

  </div>
    <div  class="row">
      <div id="secundario" class="col l8 s9">
      <img id="image5" src="<?php echo base_url(); ?>assets/images/egipto.jpg"  class="responsive-img col s12"/>
      <h4>Acuario</h4>
      <a id="" class=""><i class="fas fa-location-arrow"></i>Estuve aqui</a>
      <a id="" class=""><i class="fab fa-place-of-worship"></i>Recomentaciones</a>
          <p>Acuario monegasco. Los acuarios cumplen muchas funciones y son un pasatiempo muy antiguo.
          Un acuario es un recipiente de vidrio u otros materiales, generalmente transparentes, dotado de los componentes mecánicos que hacen posible la recreación de ambientes subacuáticos de agua dulce, marina o salobre, con el fin de albergar un ecosistema correspondiente a esos ambientes, con peces, invertebrados, plantas y casi cualquier animal fluvial o marino.
        </p>
        <p>  La cría de seres acuáticos en cautividad es muy antigua, sin embargo los acuarios nacieron en el siglo XVIII, al menos en su forma contemporánea. El entretenimiento de mantener y disfrutar de un entorno acuático a la vista de todos surgió con la moda de coleccionar animales y sobre todo plantas. Estas últimas necesitaban humedad tanto para vivir como para ser transportadas, para lo cual se desarrollaron recipientes sellados que podían contener cierta cantidad de líquido. Más adelante, dicha cantidad fue aumentando hasta convertirse en los modelos actuales.</p>
      <div class="row">
        <div id="peop" class="col l2 ">
          <i class="fas fa-users"></i>
        </div>
        <textarea id="textarea1" class="materialize-textarea col l8 s8" placeholder="Comentarios"></textarea>

      </div>
      </div>
      <div id="tercero" class="col l3 s9">
        <img id="avatar" src="<?php echo base_url(); ?>assets/images/calles.jpg" class="responsive-img circle center-align"/>
          <h6>Perfil de autor</h6>
          <hr>
            <p>  La cría de seres acuáticos en cautividad es muy antigua, sin embargo los acuarios nacieron en el siglo XVIII, al menos en su forma contemporánea. El entretenimiento de mantener y disfrutar de un entorno acuático a la vista de todos surgió con la moda de coleccionar animales y sobre todo plantas. Estas últimas necesitaban humedad tanto para vivir como para ser transportadas, para lo cual se desarrollaron recipientes sellados que podían contener cierta cantidad de líquido. Más adelante.</p>
      </div>
    </div>
  </body>
</html>
