<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gastronomia</title>
  <!--	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/estilos.css">-->

  <!--foundation-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/foundation.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/app.css">

  <script src="<?php echo base_url() ?>assets/js/foundation.js"></script>
  <script src="<?php echo base_url() ?>assets/js/foundation.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/app.js" charset="utf-8"></script>
  <script src="<?php echo base_url() ?>assets/js/home.js" charset="utf-8"></script>
  <!--fontawesome-->
  <link rel="stylesheet" type="text/css" href="assets/css/all.css">
  <script src="<?php echo base_url(); ?>assets/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>


</head>

<body id="body" class="container">
  <div id="contenedorp">
    <header id="header">
      <div class="">
        <div id="" class="large-4 columns text-justify ">
          <a href="<?php echo base_url(); ?>welcome">Cocinando</a>
          <h6 class="large-8">La mejor cocina del mundo para esta cocina tan especial</h6>
        </div>
      </div>

    </header>
    <hr>
    <div class="row">
      <div id="primario" class="large-4 columns">
        <div class="large-12 small-12 columns">
          <div class="callout large-12 columns">
            <h5>Búsqueda Avanzada</h5>
            <form>
              <div class="row column">
                <label>Por nombre:
                  <input type="text" name="name">
                </label>
                <ul><a><i class="step fi-social-facebook size-36"></i>Inicio</a></ul>
                <hr>
                <ul><a><i class="step fi-social-instagram size-36"></i>Mi plato Perfecto</a></ul>
                <hr>
                <ul><a><i class="step fi-social-twitter size-36"></i>Mis recetas</a></ul>
                <hr>
                <ul><a><i class="step fi-social-twitter size-36"></i>Mis Favoritos</a></ul>
              </div>
              <div class="row">
                <div class="large-4 columns">
                  <img id="picture" src="<?php echo base_url(); ?>assets/images/image1.jpg" width="100" height="100" class="" alt="">
                </div>
                <div class="large-4 columns">
                  <img id="picture" src="<?php echo base_url(); ?>assets/images/image2.jpg" width="100" height="100" class="" alt="">
                </div>
                <div class="large-4 columns">
                  <img id="picture" src="<?php echo base_url(); ?>assets/images/image3.jpg" width="100" height="100" class="" alt="">
                </div>
              </div>
              <div class="row">
                <div class="large-4 columns">
                  <img id="picture" src="<?php echo base_url(); ?>assets/images/image4.jpg" width="100" height="100" class="" alt="">
                </div>
                <div class="large-4 columns">
                  <img id="picture" src="<?php echo base_url(); ?>assets/images/image5.jpg" width="100" height="100" class="" alt="">
                </div>
                <div class="large-4 columns">
                  <img id="picture" src="<?php echo base_url(); ?>assets/images/image1.jpg" width="100" height="100" class="" alt="">
                </div>
              </div>
              <div>
                <ul>Historial</ul>
                <ul><a><i class="step fi-social-facebook size-36"></i>Plato Principal</a></ul>
                <ul><a><i class="step fi-social-instagram size-36"></i>Postres</a></ul>
                <ul><a><i class="step fi-social-twitter size-36"></i>Entradas</a></ul>
                <ul><a><i class="step fi-social-youtube size-36"></i>Puntos</a></ul>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div id="secundario" class="large-8 columns">
        <h2>Cocinando</h2>
        <h5>21 de Agosto 2019</h5>
        <div class="">
          <img id="img" src="<?php echo base_url(); ?>assets/images/image1.jpg" width="1000" height="10000" class="" alt="">
        </div>
        <div>
          <p>
            Asia Los científicos han desenterrado lo que llaman «los fideos más antiguos que se conocen» con cuatro milenios de antigüedad, informa el periódico The New York Times.1​ Son delgados, amarillos, miden 50 centímetros de largo y están hechos de un mijo originario de China. Se descubrieron en un tazón de barro sepultado bajo una capa de sedimento de tres metros de espesor cerca del río Huang Ho (río Amarillo) en el noroeste de China. La revista Nature señala que es probable que el lugar fuese arrasado por un terremoto y una “inundación catastrófica” hace aproximadamente cuatro mil años. El origen de esta pasta es parecido a lo que se dio paralelamente en diferentes partes de Eurasia (en lugares como China, Oriente Medio e Italia), el Times recoge la siguiente opinión de uno de los descubridores, Houyuan Lu, de la Academia de Ciencias de China: «Esta investigación ha demostrado que una de las primeras producciones de fideos tuvo lugar en China, aunque si de manera independiente y no relacionada con las que se desarrollaron en Occidente, en lugares como Itali.
          </p>
        </div>
        <div class="large-12 columns">
          <label>Comentarios
            <textarea placeholder="Comentarios" rows="4" cols="20"></textarea>
          </label>
          <button type="button" class="button "> Publicar <i class="fas fa-pencil-alt"></i></button>
        </div>
        <hr>
      </div>

      <?php // IDEA: aqui empieza el jugo  
      ?>
      <div id="secundario" class="large-8 columns large-offset-4">
        <h3>Mejores Jugo naturales</h3>
        <h5>21 de septiembre 2019</h5>

        <div class="">
          <img id="img" src="<?php echo base_url(); ?>assets/images/jugo.jpg" width="1000" height="10000" class="" alt="">
        </div>
        <div>
          <p>

            El término zumo solo se aplica al líquido que se obtiene de las hierbas, flores, frutas u otros vegetales.Generalmente, el nombre jugo se aplica a los líquidos que son obtenidos por presión, en tanto que los obtenidos por cocción son llamados infusiones. Por su parte, el producto obtenido de la cocción de piezas cárnicas se suele llamar caldo o consomé. También se llama jugo, al líquido que contiene o impregna un producto fresco o cocinado —carnes, pescados, verduras—, y que normalmente rezuma cuando este es cortado o manipulado.
            Algunos líquidos encontrados en organismos animales son también llamados jugo, como por ejemplo el jugo gástrico.2​

          </p>
        </div>
        <div class="large-12 columns">
          <label>Comentarios
            <textarea placeholder="Comentarios" rows="4" cols="20"> </textarea>
          </label>
          <button type="button" class="button ">Publicar <i class="fas fa-pencil-alt"></i></button>
        </div>
      </div>
      <div>

      </div>
</body>

</html>