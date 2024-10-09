<?php
  include ("cabecera.php");
?>   

    <!-- Page Content -->
    <!-- Banner Starts Here -->
     <div class="banner header-text">
 <!--     <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>-->
<?php
  include ("carousel.php");
?>       
    </div> 
    <!-- Banner Ends Here -->

    <!-- Caroeusel -------------------------------------------------------------------------------->

    <!-- Caroeusel -------------------------------------------------------------------------------->

    <div class="latest-products">
      <div class="container">
       <div class="title-cards">
           <div class="translucent-box">
		<h5 style="text-align: justify; color: black;"><b>SUCORTE</b> brinda su experiencia y compromiso en diversos aspectos, para ayudarle a mejorar la eficiencia de sus procesos de corte, ofreciendo calidad en productos y herramientas.</h5>
        
        </div>
        </div>
        </div>
        </div>
       
        
<div class="container-card">
	
<div class="card">
	<figure>
		<img src="assets/images/equipo.jpg">
	</figure>
	<div class="contenido-card">
		<h3 style="text-shadow: 2px 2px 5px grey;">Calidad</h3>
		<h6 style="text-align: center; color: black;">Nuestro equipo brinda asesoría especializada en la herramienta más adecuada.</h6>
		<!--a href="#">Leer Màs</a-->
	</div>
</div>
<div class="card">
	<figure>
		<img src="assets/images/sierra.png">
	</figure>
	<div class="contenido-card">
		<h3 style="text-shadow: 2px 2px 5px grey;">Variedad</h3>
		<h6 style="text-align: center; color: black;">Marcas reconocidas nacionales e internacionales para el apoyo de la industria manufacturera y petrolera.</h6>
		<!--a href="#">Leer Màs</a-->
	</div>
</div>
<div class="card">
	<figure>
		<img src="assets/images/equipo1.jpg">
	</figure>
	<div class="contenido-card">
		<h3 style="text-shadow: 2px 2px 5px grey;">Talento</h3>
		<h6 style="text-align: center; color: black;">Contamos con un equipo de trabajo orientado a servir a nuestros clientes.</h6>
		<!--a href="#">Leer Màs</a-->
	</div>
</div>
</div>
      </div>
    </div>
    </div>
<!-- <title>Carrusel de imágenes</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
.carousel-horizontal {
  display: flex;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  text-align: center;
}

.carousel-item {
  flex: 0 0 auto;
  scroll-snap-align: start;
}

.carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10%;
}
.carousel-item img { width: 250px; height: auto; animation: slide-in 1s ease-in-out; } 
@keyframes slide-in { 
  0% { transform: translateX(100%); opacity: 0; } 
  100% { transform: translateX(0); opacity: 1; } 
} 
</style>

<div id="myCarousel" class="carousel-horizontal carousel" >
  <div class="carousel-inner dragscrollable">
    <div class="carousel-item active">
      <img src="assets/images/mitutoyo.png" alt="Imagen 1">
      <img src="assets/images/dormer.png" alt="Imagen 2">
      <img src="assets/images/bahco.png" alt="Imagen 3">
      <img src="assets/images/garr tool.png" alt="Imagen 4">
      <img src="assets/images/3m.png" alt="Imagen 5">
    </div>
    <div class="carousel-item">
      <img src="assets/images/impero.png" alt="Imagen 6">
      <img src="assets/images/safety.png" alt="Imagen 7">
      <img src="assets/images/proto.png" alt="Imagen 8">
      <img src="assets/images/ridgid.png" alt="Imagen 9" >
      <img src="assets/images/sandvik.png" alt="Imagen 10">
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script>
  $(document).ready(function(){
    $('.carousel-horizontal').on('mousewheel DOMMouseScroll', function(e) {
      e.preventDefault();
      
      var delta = e.originalEvent.wheelDelta || -e.originalEvent.detail;
      this.scrollLeft += (delta < 0 ? 1 : -1) * 30;
    });
    
    $('.carousel').carousel({
      interval: 3000 // Cambia de imagen cada 5 segundos
    });
    
    $('.carousel-inner').addClass('dragscrollable');
  });
</script> -->

<!--   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Nuestras Marcas</h2>
        </div>
        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="assets/images/mitutoyo.png">
            </div>
            <div class="slide">
              <img src="assets/images/dormer.png">
            </div>
            <div class="slide">
              <img src="assets/images/bahco.png">
            </div>
            <div class="slide">
              <img src="assets/images/garr tool.png">
            </div>
            <div class="slide">
              <img src="assets/images/3m.png">
            </div>
            <div class="slide">
              <img src="assets/images/impero.png">
            </div>
            <div class="slide">
              <img src="assets/images/safety.png">
            </div>
            <div class="slide">
              <img src="assets/images/proto.png">
            </div>            
            <div class="slide">
              <img src="assets/images/ridgid.png">
            </div> 
            <div class="slide">
              <img src="assets/images/sandvik.png">
            </div> 

            <div class="slide">
              <img src="assets/images/mitutoyo.png">
            </div>
            <div class="slide">
              <img src="assets/images/dormer.png">
            </div>
            <div class="slide">
              <img src="assets/images/bahco.png">
            </div>
            <div class="slide">
              <img src="assets/images/garr tool.png">
            </div>
            <div class="slide">
              <img src="assets/images/3m.png">
            </div>
            <div class="slide">
              <img src="assets/images/impero.png">
            </div>
            <div class="slide">
              <img src="assets/images/safety.png">
            </div>
            <div class="slide">
              <img src="assets/images/proto.png">
            </div>            
            <div class="slide">
              <img src="assets/images/ridgid.png">
            </div> 
            <div class="slide">
              <img src="assets/images/sandvik.png">
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <br> -->
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
         
        </div>
        </div>
        </div>
        </div>
  <!--Slider ------------------------------->
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 style="font-weight: bold; color: black; text-shadow: 2px 2px 5px grey;">Nuestras marcas aliadas</h2>
        </div>
        </div>
        </div>
        </div>
        
  <!---------------------------------------->

<?php
  include ("slider.php");
  include ("pie.php");
?>