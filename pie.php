<?php
  include ("whatsapp.php");
?>     

    <footer class="bg-dark" id="tempaltemo_footer" style="text-align: left;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">

                    <img src="assets/images/logo.png" class="attachment-large size-large imgfooter" alt="" decoding="async" loading="lazy" />

                    <h2 class="h2 text-success border-bottom pb-3 border-light logo"></h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fa fa-map-marker fa-fw"></i>
                            Circunvalación 2, Sector Cardonal Sur.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.C. El Dividivi, Local L2.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maracaibo - Venezuela.

                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">+58 0412-7993044</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:ventas@sucorte.com">ventas@sucorte.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a href="productos.php#sujecion" class="text-decoration-none" target=_blank >Herramientas de Sujeción</a></li>
                        <li><a href="productos.php#sujecion" class="text-decoration-none" target=_blank >Instumentos de Medición</a></li>
                        <li><a href="productos.php#sujecion" class="text-decoration-none" target=_blank >Herramientas de Fresado</a></li>
                        <li><a href="productos.php#abrasivos" class="text-decoration-none" target=_blank >Abrasivos</a></li>
                        <li><a href="productos.php#abrasivos" class="text-decoration-none" target=_blank >Prensas Mecánicas</a></li>
                        <li><a href="productos.php#abrasivos" class="text-decoration-none" target=_blank >Brocas</a></li>    
                        <li><a href="productos.php#insertos" class="text-decoration-none" target=_blank >Insertos</a></li>
                        <li><a href="productos.php#insertos" class="text-decoration-none" target=_blank >Sierras y Cintas</a></li>
                        <!--li><a href="productos.php#insertos" class="text-decoration-none" target=_blank >Y más productos</a></li-->
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Más información</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">inicio</a></li>
                        <li><a class="text-decoration-none" href="productos.php">Productos</a></li>
                        <li><a class="text-decoration-none" href="acerca.php">Quiénes somos</a></li>
                        <li><a class="text-decoration-none" href="contacto.php">Contáctanos</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    Síguenos
                    <ul class="list-inline text-left footer-icons my-1">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://instagram.com/sucorteherramientas?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram fa-lg fa-fw"></i></a>
                        </li>                      
                        <!-- li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li-->
                    </ul>
                </div>
                <!--div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div-->
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Sucorte 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>

</html>