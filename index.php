<?php ?>
/**
 * Created by PhpStorm.
 * User: macbook_joel
 * Date: 27/11/16
 * Time: 10:51 AM
 */

<!DOCTYPE html>
  <html>
    <head>
        <title>UNIPESA</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    </head>

    <body>
    <nav>
        <div class="nav-wrapper #00897b teal darken-1">
            <a href="#" class="brand-logo">Unipesa</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a><i class="material-icons">shopping_cart</i></a></li>
                <li><a href="sass.html">Inicio</a></li>
                <li><a href="badges.html">Nosotros</a></li>
                <li><a href="collapsible.html">Productos</a></li>
            </ul>
        </div>
    </nav>


    <div class="parallax-container">
        <div class="parallax"><img src="images/paralaxun.png"></div>
    </div>

    <section>
        <div class="carousel carousel-slider center" data-indicators="true">
            <div class="carousel-fixed-item center">
                <a class="btn waves-effect white grey-text darken-text-2">button</a>
            </div>
            <div class="carousel-item red white-text" href="#one!">
                <h2>First Panel</h2>
                <p class="white-text">This is your first panel</p>
            </div>
            <div class="carousel-item amber white-text" href="#two!">
                <h2>Second Panel</h2>
                <p class="white-text">This is your second panel</p>
            </div>
            <div class="carousel-item green white-text" href="#three!">
                <h2>Third Panel</h2>
                <p class="white-text">This is your third panel</p>
            </div>
            <div class="carousel-item blue white-text" href="#four!">
                <h2>Fourth Panel</h2>
                <p class="white-text">This is your fourth panel</p>
            </div>
        </div>

    </section>
    <section style="padding-top: 50px; padding-bottom: 50px;">
        <div class="row">
            <div class="col s4">
                <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/office.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Bota Welt con elastometro<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Ir al producto</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s4">
                <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/office.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Unisex Coverall<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Ir al producto</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s4">
                <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/office.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Rollo cable 7MM<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Ir al producto</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

        </div>
    </section >
    <section class="#bdbdbd grey lighten-1" style="padding-bottom: 50px; padding-top: 50px;">
        <div class="row">
            <h3 class="center">Pedidos</h3>
            <div class="col s6  center">
                <div class="container"> <i class="large material-icons">perm_phone_msg</i>
                <p>Para mayor información, solicitud de existencia y pedidos de los productos; ponemos a tu alcance las
                    líneas telefónicas para estár siempre a tu disposición.<br>Nuestros números son: </p>
                </div>
            </div>

            <div class="col s6  center">
                <div class="container">
                    <i class="large material-icons">shopping_cart</i>
                    <p>Ahora contamos con nuestra tienda en línea para mayor comodida y alcance en todo momento con nuestros
                        productos. </p>
                </div>

        </div>

    </section>

    <section >
        <div class="row ">
            <form class="col s6 offset-s3 ">
                <div class="row">
                    <h3 class="center" style="padding-bottom: 15px;">Contactanos</h3>
                    <div class="input-field col s6 ">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s6 ">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Apellido</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 ">
                        <input  id="disabled" type="text" class="validate">
                        <label >Asunto</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 ">
                        <input id="email" type="email" class="validate">
                        <label for="email">Correo electrónico</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 ">
                        <textarea id="textarea1" class="materialize-textarea" length="500"></textarea>
                        <label for="textarea1">Inserte el mensaje</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </section>

    <footer class="page-footer #000000 black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Uniformes petroleros S.A. de C.V.</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Fichas técnicas</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Bota</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Suela</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Casquillo</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Uniforme</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Cable</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright #424242 grey darken-3">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>  $(".button-collapse").sideNav();</script>
    <script>    $(document).ready(function( ){
            $('.parallax').parallax();
        });
    </script>
    <script> $('.carousel.carousel-slider').carousel({full_width: true, time_constant: 400 } );</script>
    <script>
        // Next slide
        $('.carousel').carousel('next');
        $('.carousel').carousel('next', 3); // Move next n times.
        // Previous slide
        $('.carousel').carousel('prev');
        $('.carousel').carousel('prev', 4); // Move prev n times.
        // Set to nth slide
        $('.carousel').carousel('set', 4);
    </script>
    </body>
  </html>
