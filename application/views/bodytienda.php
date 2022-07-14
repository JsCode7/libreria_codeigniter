<header>
    <!--Menú principal-->
    <ul>
        <li style="float:left"><a href="<?php echo base_url(); ?>index.php/user/iniciotienda" style="padding: 0px;"><img class="logo" src="<?php echo base_url(); ?>assets/img/Logo.png" width="40" alt="logo"></a></li>
        <li style="float:left"><a class="active" href="<?php echo base_url(); ?>index.php/user/iniciotienda">Inicio </a></li>
        <li style="float:left"><a href="<?php echo base_url(); ?>index.php/user/catalogo">Catálogo</a></li>
        <li style="float:left"><a href="<?php echo base_url(); ?>index.php/user/contacto">Contacto</a></li>
        <li style="float:right"><a href="<?php echo base_url(); ?>index.php/user/iniciarsesion">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
        </a></li>
    </ul>
</header>


<body>
    <!--Slider principal con Bootstrap-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>assets/img/Libro3.jpg" class="d-block w-100" height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Un lugar para leer en calma</h5>
              <p>Con cómodos espacios para poder leer en tranquilidad</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/Slide1.jpg" class="d-block w-100" height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Variedad de libros</h5>
              <p>Distintas clases de libros para tu elección</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/Slide2.jpg" class="d-block w-100" height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Etiquetado especial</h5>
              <p>Para poder encontrar los libros de manera más rápido</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      

    <!--Texto e imagen-->
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="<?php echo base_url(); ?>assets/img/Libro2.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Encuentra tu propio mundo</h1>
          <p class="lead">¡Podrás disfrutar de una grata experiencia, elige el que más te gusta, y decide si solo lo pedirás prestado ó lo comprarás!
            No hay apuros.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="#"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 btn-card">Préstamo</button></a>
            <a href="carro.html"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Comprar</button></a>
          </div>
        </div>
      </div>
    </div>

    <!--Esta es la sección del countdown-->
    <section class="seccion-countdown">
      <h3 class="titulo-countdown">Tiempo para que se terminen las ofertas de este mes</h3>
    
      <p class="countdown">
          <span id="days"></span> días - <span id="hours"></span> horas - <span id="minutes"></span> minutos - <span id="seconds"></span> segundos
      </p>
    </section> 
      
    <!--Esta es la sección de las reseñas-->
    <div><h3 class="titulo-resenas">Algunos de nuestros Usuarios</h3></div>
    <!--Nuevas Reseñas-->
    <div class="contenedor-resenas">
      <!--Tarjeta 1-->
      <div class="card" style="width: 18rem;">
        <img src="<?php echo base_url(); ?>assets/img/profile1.png" class="img-card">   
        <div class="card-body">
          <h5 class="card-title">Juan González</h5>
          <p class="card-text">"Es un super buen lugar para ir a estudiar tranquilo"</p>
          <!-- <a href="#" class="btn btn-primary btn-card">Go somewhere</a> -->
        </div>
      </div>
      <!--Tarjeta 2-->
      <div class="card" style="width: 18rem;">
        <img src="<?php echo base_url(); ?>assets/img/profile2.png" class="img-card">      
        <div class="card-body">
          <h5 class="card-title">María Martinez</h5>
          <p class="card-text">"Buena la atención y el ambiente es agradable."</p>
           <!--<a href="#" class="btn btn-primary btn-card">Go somewhere</a> -->
        </div>
      </div>
      <!--Tarjeta 3-->
      <div class="card" style="width: 18rem;">
        <img src="<?php echo base_url(); ?>assets/img/profile3.png" class="img-card">      
        <div class="card-body">
          <h5 class="card-title">Pedro Moraga</h5>
          <p class="card-text">"Buena la atención y el ambiente es agradable."</p>
          <!-- <a href="#" class="btn btn-primary btn-card">Go somewhere</a> -->
        </div>
      </div>
      <!--Tarjeta 4-->
      <div class="card" style="width: 18rem;">
        <img src="<?php echo base_url(); ?>assets/img/profile4.png" class="img-card">      
        <div class="card-body">
          <h5 class="card-title">Luz Guerra</h5>
          <p class="card-text">"Buena la atención y el ambiente es agradable."</p>
          <!--<a href="#" class="btn btn-primary btn-card">Go somewhere</a> -->
        </div>
      </div>
    </div>

</body>