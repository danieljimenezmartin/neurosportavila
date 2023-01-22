<?php include("header.php"); ?>

		<title>Neurosport Clínica de Fisioterapia - Contactar</title>
	
	</head>
		
	<body lang="es">
	
<?php include("menu.php"); ?>
			
			<!-- Content -->
			<div id="content">
			
				<!-- masthead -->
		        <div id="masthead">
					<span class="head">Contactar</span>
					<ul class="breadcrumbs">
						<li><a href="inicio.php">inicio</a>/contactar</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	<!-- page content -->
	        	<div id="page-content">
	        	
						
					<!-- Map -->
				<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" /></script>
				<script type="text/javascript">
					function initialize() {
						var latlng = new google.maps.LatLng(40.65119996223908, -4.694210628033488);
						var myOptions = {
						  zoom: 18,
						  center: latlng,
						  mapTypeId: google.maps.MapTypeId.ROADMAP
						  
					};
					var map = new google.maps.Map(document.getElementById("map"),
					    myOptions);
					
					 var img = new google.maps.MarkerImage("img/logogoogle.png");
					 
					 var marker = new google.maps.Marker({
					  position: latlng,
					  map: map,
					  icon: img,
					  title:"NeuroSport Clínica de Fisioterapia"
					});
					
					var infowindow = new google.maps.InfoWindow({
					content: '<strong>NeuroSport Clínica de Fisioterapia</strong></br>C/ Doctor Jesús Galán, 24</br>Ávila'
					});
 
					infowindow.open(map,marker);
					
					}
				</script>
				
				<div id="map-holder">
					<div id="map"></div>
					
				</div>
				
				<!-- ENDS Map -->
						
	        		
					<!-- form -->
					<script type="text/javascript" src="js/form-validation.js"></script>
					<form id="contactForm" action="#" method="post">
						<h3 class="heading">Contacta con nosotros usando este formulario</h3>
						
						<fieldset>
							<div>
								<input name="name"  id="name" type="text" class="form-poshytip" title="Introduce tu nombre" />
								<label>Nombre<sup>*</sup></label>
							</div>
							<div>
								<input name="email"  id="email" type="text" class="form-poshytip" title="Introduce tu dirección de email" />
								<label>Email<sup>*</sup></label>
							</div>
							<div>
								
								<input name="telefono"  id="telefono" type="text" class="form-poshytip" size="9" title="Introduce tu número de teléfono" />
								<label>Teléfono<sup>*</sup></label>
							</div>
							<div>
								<label>Mensaje<sup>*</sup></label>
								</br>
								<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Introduce tu mensaje"></textarea>
							</div>
							
							<div style="float:left; margin-right:35px;">
							<input type="checkbox" style="width:10px; height:10px; text-decoration:none;" value="1" name="chkAcepto" id="chkAcepto">
							<label style="margin-left:15px; margin-top:-20px;">He leído y acepto la <a href="avisolegal.html" target="_blank"><span style="text-decoration:underline;">política de privacidad</span></a><sup>*</sup></label>
							</div>
				
							<!-- send mail configuration -->
							<input type="hidden" value="info@neurosportavila.es" name="to" id="to" />
							<input type="hidden" value="Mensaje desde la web" name="subject" id="subject" />
							<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
							<!-- ENDS send mail configuration -->
							
							<p><input type="button" value="ENVIAR" name="submit" id="submit" align="left" style=" margin-right: 130px;"/> <span id="error" class="warning"></span></p>
						</fieldset>
						<p><sup>*</sup>campos obligatorios</p>
						
					</form>
					<p id="sent-form-msg" class="success">Su mensaje ha sido enviado. Muchas gracias.</p>
					<!-- ENDS form -->
						
	        		
	        	</div>
	        	<!-- ENDS page content -->
	        	
	        	
	        	<!-- sidebar -->
	        	<aside id="sidebar">
	        		<div class="block">
		        		<h4>Dirección</h4>
		        		<p>NEUROSPORT CLÍNICA DE FISIOTERAPIA AVANZADA</p>
		        		
		        		<ul class="address-block">
		        			<li class="address">Calle Doctor Jesús Galán 24</br>
							05003 Ávila</br></li>
		        			<li class="phone">920 25 25 62</li>
		        			<li class="mobile">656 559 027</li>
		        			<li class="email"><a href="mailto:info@neurosportavila.es">info@neurosportavila.es</a></li>
		        		</ul>
		        		
	        		</div>	        	
	        	</aside>
	        	<div class="clearfix"></div>
				<!-- ENDS sidebar -->
				
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<!-- Start google map -->
		<script>initialize();</script>
		
<?php include("footer.php"); ?>