<?php include "header.php"; ?>

	<div class="page">

    	<div class="container">
			
			<h2>CONTÁCTENOS</h2>
			<hr>
			
			<div class="ten columns offset-by-one right">
				<form action="" method="post">
					<div class="six columns ">
						<label>NOMBRE
							<input type="text" name="nombre" id="nombre" required>
						</label>

						<label>EMAIL
							<input type="email" name="email" id="email" required>
						</label>

						<label>TELÉFONO
							<input type="text" name="telefono" id="telefono" required>
						</label>

						</form>
					</div>
					<div class="six columns left">
						
						MENSAJE <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
						
						<input class="button button-primary" type="submit" value="Enviar">
					</div>
			</div>

			<div class="iframe twelve columns">
				<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2260.1264184404795!2d-74.07636455389189!3d4.666236804041506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e3f9a556102c673%3A0xe829cfd0d012d3dd!2sCarrera+50+%2371-1+a+71-99%2C+Bogot%C3%A1%2C+Colombia!3m2!1d4.6666332!2d-74.0752606!5e0!3m2!1ses!2ses!4v1445264603206" width="100%" height="200" frameborder="0" style="border:15px;" allowfullscreen></iframe>
			</div>

			<div class="twelve columns"><br><hr></div>
			
			<div class="ten columns offset-by-one">
				<ul class="quienes--valores">
					<li class="four columns"><img src="images/quienes-somos/alta-calidad.png" alt=""></li>
					<li class="four columns"><img src="images/quienes-somos/responsabilidad-entrega.png" alt=""></li>
					<li class="four columns"><img src="images/quienes-somos/confianza-seguridad.png" alt=""></li>
				</ul>
			</div>
		</div>

    </div>


<?php include "footer.php"; ?>