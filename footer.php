<footer class="map-bg">
      <div class="container py-5 border-bottom">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0"><img class="mb-3" src="img/logo-lpi.png" alt="" width="80">
                <ul class="list-unstyled text-muted">
                    <li><a class="reset-anchor text-small" href="mailto:contactlepretimmo@gmail.com">contactlepretimmo@gmail.com</a></li>
                    <li><a class="reset-anchor text-small" href="tel:+33321300750">+33 3 21 30 07 50</a></li>
                </ul>
                <!--
                <ul class="list-inline text-muted">
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>-->
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 ml-auto">
                <h4>Nos services</h4>
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-1"><a class="text-small reset-anchor" href="credit-immo.php">Nos crédits immobiliers</a></li>
                    <li class="mb-1"><a class="text-small reset-anchor" href="credit-immo.php">Rachats de crédits</a></li>
                    <li class="mb-1"><a class="text-small reset-anchor" href="simulator2.php">Simulez votre prêt</a></li>
                    <li class="mb-1"><a class="text-small reset-anchor" href="#">Conditions générales</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 ml-auto">
                <h4>À propos</h4>
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-1"><a class="text-small reset-anchor" href="agences.php">Nos agences</a></li>
                    <li class="mb-1"><a class="text-small reset-anchor" href="contact.php">Nous contacter</a></li>
                    <li class="mb-1"><a class="text-small reset-anchor" href="#">Conditions générales</a></li>
                </ul>
            </div>
          
        </div>
      </div>
      <div class="container py-4">           
        <div class="row text-center">
          <div class="col-lg-6 p-lg-0 text-lg-left">
            <p class="text-muted text-small mb-0">© <?php echo date('Y');?> Le-Prêt-Immo, tous droits résérvés</p>
          </div>
          <div class="col-lg-6 p-lg-0 text-lg-right">
            <p class="text-muted text-small mb-0">Made with <i class="far fa-heart"></i> by <a class="text-primary reset-anchor" href="http://www.vincentnierat.com" target="_blank">Vincent Nierat</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Scroll top button-->
    <div class="scroll-top-btn" id="scrollTop"><i class="fas fa-long-arrow-alt-up"></i><span class="font-weight-bold text-uppercase small">To the Top</span></div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/modal-video/js/modal-video.min.js"></script>
    <script src="vendor/leaflet/leaflet.js"></script>
    <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
            integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
            crossorigin="anonymous"></script>
    <script src="js/front.js"></script>
    <?php
      if ($page === 1 || $page === 3) {
        echo ('<script src="js/calc.js"></script>');
      }


    ?>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>