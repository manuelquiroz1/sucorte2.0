<?php
  include ("cabecera.php");
?> 

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
                <div class="translucent-box">
              <h2>Nuestra ubicación y Contacto</h2>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <!--div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div-->
          <div class="col-md-8">
            <!-- How to change your own map point
            	1. Go to Google Maps
            	2. Click on your location point
            	3. Click "Share" and choose "Embed map" tab
            	4. Copy only URL and paste it within the src="" field below
            -->
            <div id="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.0141228883094!2d-71.65877789746696!3d10.607747871337024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e899757d80e60b9%3A0x9699d83f5c46c3d9!2sC.C%20Dividivi!5e0!3m2!1ses!2sus!4v1689950914227!5m2!1ses!2sus" width="100%" height="370px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!--iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe-->
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h3 style="font-weight: bold; color: black; text-shadow: 2px 2px 5px grey;">Sobre nuestra oficina</h3>
              <p>Circunvalación 2, Sector Cardonal Sur.<br>
                 C.C. El Dividivi, Local L2.<br>
                 Maracaibo - Venezuela.
                 <br><br>
                <a href="https://wa.link/z2cofv" target="_blank">+58 0412-7993044 <img src="assets/images/whatsapp.png" alt="1"></a><br>
                +58 0261-3350208<br>
                +58 0261-7361738
                <br><br>
                ventas@sucorte.com

              </p>
              <ul class="social-icons">
                <li><a href="https://instagram.com/sucorteherramientas?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram"></i></a></li>  
                <!--li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="accordion">
              <li>
                  <a>Accordion Title One</a>
                  <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                  </div>
              </li>
              <li>
                  <a>Second Title Here</a>
                  <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                  </div>
              </li>
              <li>
                  <a>Accordion Title Three</a>
                  <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                  </div>
              </li>
              <li>
                  <a>Fourth Accordion Title</a>
                  <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Happy Customers</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="2">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="3">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="4">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="5">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
<br>
<?php
  include ("pie.php");
?>  
