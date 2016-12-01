<?php ?>
/**
* Created by PhpStorm.
* User: macbook_joel
* Date: 30/11/16
* Time: 18:32
*/

<!DOCTYPE html>
<html>
<head>
    <title>UNIPESA</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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



<section>
    <div class="row">
        <div class="container col offset-s1" style=" height: 100%; width: 100%; ">
            <h3>Lista de artículos</h3>
            <table class="striped responsive-table col m7" >
                <thead>
                <tr>
                    <th data-field="#">Articulo</th>
                    <th data-field="#">Marca</th>
                    <th data-field="#">Descripción</th>
                    <th data-field="#">Cantidad</th>


                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>***</td>
                    <td>***</td>
                    <td>***</td>
                    <td>  <select class="browser-default">
                            <option value="" disabled selected>cantidad</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select></td>

                    <td><a id="addcar" class="btn-floating btn-large waves-effect waves-light #00796b"><i class="material-icons">delete</i></a></td>
                </tr>

                </tbody>
            </table>
            <div class="col m3">
                <div class="card #ffffff white">
                    <div class="card-content black-text">
                        <span class="card-title">Comprar ahora</span><br>
                        <label>Subtotal:</label><br>
                        <label>Descuento:</label><br>
                        <label>IVA:</label><br>
                        <label>TOTAL:</label>
                    </div>
                    <div class="card-action" ">
                    <a class="waves-effect waves-light btn"><i class="material-icons left">shopping_cart</i>Procesar Compra</a>
                </div>
            </div>


        </div>

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