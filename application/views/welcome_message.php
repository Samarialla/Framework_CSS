<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Musica</title>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/estilos.css">
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
			<!--fontawesome-->
			<link rel="stylesheet" type="text/css" href="assets/css/all.css">
    	<script src="<?php echo base_url(); ?>assets/js/all.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>

	    <!--select2-->
	    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js">

  </head>
  <body id="body">
		<div id="contenedor">
		  <header id="header">

						<div class="row">
							<div class="col-lg-4" >
    						<img src="<?php echo base_url(); ?>assets/images/logo.png" width="100" height="100" class="" alt="">
							</div>
								<div id="redes" class="col-lg-4 col-lg-offset-4 col-xs-offset-2" style="font-size: 5.5rem;">
									<i class="fab fa-facebook-square "></i>
									<i class="fab fa-youtube"></i>
									<i class="fab fa-instagram"></i>
									<i class="fab fa-twitter"></i>
								</div>


						</div>
		<nav id="nav" class="navbar navbar-light">
			<a id="color" class="" href="<?php echo base_url(); ?>Gastronomia" title="Enlace genérico">Inicio</a>
			<a id="color" class="" href="" title="Enlace genérico">Artistas</a>
	    <a id="color" class="" href="" title="Enlace genérico">Top 10</a>
			<a id="color" class="" href="" title="Enlace genérico">Grupos</a>
			<a id="color" class="" href="" title="Enlace genérico">Letras</a>
			<a id="color" class="" href="" title="Enlace genérico">Acerca de</a>
		</nav>

			</header>
		</div>

		<div id="contenedor">
			<div class="row">
        <div class="col-lg-8 col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-xs-12">
              <h3 class="col-xs-12">Tributos a THE BEATLES</h3>
                  <p>
                  The Beatles fue una banda de rock9  inglesa activa durante la década de 1960, y reconocida como la más exitosa comercialmente y la más alabada por la crítica en la historia de la música popular y de la música rock.10​11​12​13​14​ Formada en Liverpool, estuvo constituida desde 1962 por John Lennon (guitarra rítmica, vocalista), Paul McCartney (bajo, vocalista), George Harrison (guitarra solista, vocalista) y Ringo Starr (batería, vocalista). Enraizada en el skiffle y el rock and roll de los años 1950
                  </p>
            </div>
            <div class="col-lg-6 col-xs-12">
              <img id="beatles" src="<?php echo base_url(); ?>assets/images/beatles.jpg." alt=""></img>
            </div>
            <div class="row">
              <div id="user" class="col-lg-1 col-xs-2">
                <i class="glyphicon glyphicon-user"></i>
              </div>
              <div id="textarea" class="col-lg-9 col-xs-6">
                  <textarea class="form-control"  rows="6" cols="60" placeholder="Comentarios"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 ">
                <img id="planeta" src="<?php echo base_url(); ?>assets/images/descarga.jpg." alt=""></img>
            </div>
            <div class="col-lg-6">
              <h3>Navegacion de los planetas</h3>
                <p>
                  Etimológicamente, la palabra "planeta" proviene del latín planeta, que a su vez deriva del griego πλανήτης ('planētēs' que en griego tiene dos acepciones: «vagabundo» y «errante»). Esto se debe a que en la antigüedad, siguiendo la teoría geocéntrica de Claudio Ptolomeo (siglo I y/o II), se creía que en torno a la Tierra giraban (además del Sol y la Luna) las luminarias/estrellas, entre las que se diferenciaban las luminarias (estrellas)
                </p>
            </div>
          </div>

          <div class="row">
            <div id="user" class="col-lg-1 col-xs-2">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <div id="textarea" class="col-lg-9 col-xs-6">
                <textarea class="form-control"  rows="6" cols="60" placeholder="Comentarios"></textarea>
            </div>
          </div>

        </div>
        <div class="col-lg-4 hidden-xs">
          <div class="col-lg-12">
          <form id="buscador">
            <div class="input-group col-lg-8 col-lg-offset-2">
                  <span class="input-group-addon"><i class="fas fa-search"></i></span>
                <input id="" type="text" class="form-control" name="email" placeholder="Buscador">
            </div>
          </form>
        </div>

        <div id="lista" class="hidden-xs">
            <ul>Mejores Canciones</ul>
            <hr>
            <ul>Lista de canciones</ul>
            <hr>
            <ul>Albunes</ul>
            <hr>
            <ul>Conciertos en vivo</ul>
            <hr>
            <ul>Integrantes</ul>
            <hr>
            <ul>Mejores Albunes</ul>
            <hr>
            <ul>Los mas populares</ul>
            <hr>
            <ul>Las canciones inconicas</ul>
            <hr>
            <ul>Informacion de la banda</ul>
            <hr>
            <ul>Video de los integrantes</ul>
            <hr>
            <ul>Todo sobre la banda</ul>
            <hr>
            <ul>Los planeta del sistema solar</ul>
            <hr>
            <ul>Navegacion de los sistemas solares del universo</ul>
            <hr>


        </div>

      </div>









	<!--			<div class="col-lg-4 ">
			       <h2>Tributos a THE BEATLES</h2>
				<p>
				The Beatles fue una banda de rock9  inglesa activa durante la década de 1960, y reconocida como la más exitosa comercialmente y la más alabada por la crítica en la historia de la música popular y de la música rock.10​11​12​13​14​ Formada en Liverpool, estuvo constituida desde 1962 por John Lennon (guitarra rítmica, vocalista), Paul McCartney (bajo, vocalista), George Harrison (guitarra solista, vocalista) y Ringo Starr (batería, vocalista). Enraizada en el skiffle y el rock and roll de los años 1950
				</p>

        <div id="textarea" class="input-group col-lg-12 ">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <textarea class="form-control"  rows="4" cols="30" placeholder="Comentarios"></textarea>
        </div>


    </div>

          <div class="col-lg-4">
            <img id="beatles" src="<?php echo base_url(); ?>assets/images/beatles.jpg." alt=""></img>
          </div>
          <div class="col-lg-4">
            <form id="buscador">
                  <div class="input-group col-lg-8 col-lg-offset-2">
                    <span class="input-group-addon"><i class="fas fa-search"></i></span>
                    <input id="" type="text" class="form-control" name="email" placeholder="Buscador">

                  </div>
            </form>
                <div class="from-group col-lg-8 col-lg-offset-1">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-file">Canciones</i></span>
                  <select class="form-control col-lg-8" id="sel1" placeholder="Additional Info">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  <div id="lista" class="col-lg-offset-1">
                      <ul>Mejores Canciones</ul>
                      <hr>
                      <ul>Lista de canciones</ul>
                      <hr>
                      <ul>Albunes</ul>
                      <hr>
                      <ul>Conciertos en vivo</ul>
                      <hr>
                      <ul>Integrantes</ul>
                      <hr>

                    </div>

                </div>
                <div class="col-lg-8 col-lg-offset-1">
                  <label>Años</label>
                </div>
                <div class="col-lg-8 col-lg-offset-1">
                 <select class="form-control col-lg-8" id="sel1" placeholder="Additional Info">
                    <option>2018</option>
                    <option>2017</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2018</option>
                  </select>
                </div>
          </div>

          <div class="col-lg-4">
            <img id="beatles" src="<?php echo base_url(); ?>assets/images/descarga.jpg." alt=""></img>
          </div>

          <div class="col-lg-4 ">
  			       <h2>Navegacion de los planetas</h2>
      				<p>
      				Etimológicamente, la palabra "planeta" proviene del latín planeta, que a su vez deriva del griego πλανήτης ('planētēs' que en griego tiene dos acepciones: «vagabundo» y «errante»). Esto se debe a que en la antigüedad, siguiendo la teoría geocéntrica de Claudio Ptolomeo (siglo I y/o II), se creía que en torno a la Tierra giraban (además del Sol y la Luna) las luminarias/estrellas, entre las que se diferenciaban las luminarias (estrellas)      				</p>


              <div id="textarea" class="input-group col-lg-6 col-lg-offset-6">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <textarea class="form-control"  rows="4" cols="20" placeholder="Comentarios"></textarea>
              </div>

          </div>
          <div class=" col-lg-4">
          <div class="from-group col-lg-8 col-lg-offset-1">
           <span class="input-group-addon"><i class="glyphicon glyphicon-file">Cantida de plantetas</i></span>
            <select class="form-control col-lg-8" id="sel1" placeholder="Additional Info">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="col-lg-8 col-lg-offset-1">
          <label>Planetas</label>
          </div>
          <div class="col-lg-8 col-lg-offset-1">
         <select class="form-control col-lg-8" id="sel1" placeholder="Additional Info">
              <option>Jupiter</option>
              <option>Marte</option>
              <option>Saturno</option>
              <option>Venus</option>
              <option>Etc</option>
            </select>
          </div>
        </div>-->
			</div>
		</div>
  </body>
</html>
