
	<footer>
		<div class="container">
			<div class="two columns">
				<ul class="menu__footer">
					<li><a href="/">INICIO</a></li>
					<li><a href="/quienes-somos.php">QUIENES SOMOS</a></li>
					<li><a href="/contacto.php">CONTÁCTENOS</a></li>
				</ul>
			</div>

			<div class="three columns cubrimiento__footer offset-by-one">
				<p><img src="images/icon-check.png" alt="">&nbsp;CUBRIMIENTOS EN LONA</p>
				<div class="row padding-left">
					<ul class="six columns menu__cubrimiento">
						<li><a href="/kioscos.php">Kioscos</a></li>
						<li><a href="/membranas.php">Membranas</a></li>
						<li><a href="/parasoles.php">Parasoles</a></li>
					</ul>
					<ul class="six columns menu__cubrimiento">
						<li><a href="/petalos.php">Pétalos</a></li>
						<li><a href="/sombrillas.php">Sombrillas</a></li>
						<li><a href="/toldos.php">Toldos</a></li>
					</ul>
				</div>		
			</div>

			<div class="five columns offset-by-one">
				<ul class="contacto__footer">
					<li><img src="images/icon-map.png" alt="">Carrera 50 # 71 - 87 Doce de Octubre</li>
					<li><a href="#"><img src="images/icon-tel.png" alt="">(571) 8050573 - 3112238427</a></li>
					<li><a href="mailto:ventas@parasolesydisenos.co"><img src="images/icon-email.png" alt="">ventas@parasolesydisenos.co</a></li>
				</ul>

			</div>
		</div>
	</footer>
	<div class="linea__blanca__footer"></div>
	<div class="copyright">
		<p>&copy; PARASOLES Y DISEÑOS &nbsp;&nbsp;<span>HECHO CON <img width="8" src="images/corazon.png" alt=""> POR <a target="new"href="http://suwwweb.com/">suWWWeb S.A.S</a></span></p>
	</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/jquery.meanmenu.js"></script>

  <script>
  	$(document).ready(function() {
 
	  $("#owl-demo").owlCarousel({
	 
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true,
	      pagination:false,
	      autoPlay:true
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	});
  </script>

  <script>
  	$(document).ready(function() {
 
	  $("#owl-thumb").owlCarousel({
	 
	      autoPlay: 2000, //Set AutoPlay to 3 seconds
	 	  pagination:false,
	      items : 4,
	      itemsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3]
	 
	  });
	 
	});
  </script>

  <script>

  $(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

	});

  </script>


  	<script>
	  $(function() {
	    $( "#tabs" ).tabs();
	  });
  	</script>


  		<script>
			jQuery(document).ready(function () {
			    jQuery('header nav').meanmenu();
			});
		</script>


</body>
</html>
