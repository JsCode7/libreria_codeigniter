<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/catalogo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/estilos.css" />
</head>
<body>
    <header>
        <!--Menú principal-->
        <ul>
            <li style="float:left"><a href="<?php echo base_url(); ?>index.php/user/iniciotienda" style="padding: 0px;"><img class="logo" src="<?php echo base_url(); ?>assets/img/Logo.png" width="40" alt="logo"></a></li>
            <li style="float:left"><a href="<?php echo base_url(); ?>index.php/user/iniciotienda">Inicio </a></li>
            <li style="float:left"><a class="active" href="<?php echo base_url(); ?>index.php/user/catalogo">Catálogo</a></li>
            <li style="float:left"><a href="<?php echo base_url(); ?>index.php/user/contacto">Contacto</a></li>
            <li style="float:right"><a href="<?php echo base_url(); ?>index.php/user/iniciarsesion">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                </a>
            </li>
        </ul>
    </header>
    
   

    <div class="container">
        <div class="row">
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-4">
                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <p class="text-right">Total: <span id="total"></span></p>
                <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
            </aside>
        </div>
    </div>
</body>
<footer>
    <script src="<?php echo base_url(); ?>assets/js/carrito.js"></script>
</footer>
</html>
