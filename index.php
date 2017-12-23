<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Moj Novčanik</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
		
		<!-- GOTOVO RIJEŠENJE ZA SLIDER - početak-->
		
		<!-- jQuery (required) -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="Slider/js/jquery.min.js"><\/script>')</script>

		<!-- Syntax highlighting -->
		<link rel="stylesheet" href="Slider/demos/prettify/prettify.css" media="screen">
		<script src="Slider/demos/prettify/prettify.js"></script>
		
		<!-- Anything Slider optional plugins -->
		<script src="Slider/js/jquery.easing.1.2.js"></script>
		<!-- http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js -->
		<script src="Slider/js/swfobject.js"></script>
		
		
		<!-- Anything Slider -->
		<link rel="stylesheet" href="Slider/css/theme-metallic.css">
		<script src="Slider/js/jquery.anythingslider.js"></script>

		<!-- AnythingSlider optional extensions -->
		 <script src="Slider/js/jquery.anythingslider.fx.js"></script> 
		 <script src="Slider/js/jquery.anythingslider.video.js"></script> 

		<!-- Define slider dimensions here -->
		<style>
		#slider1 { width: 672px; height: 423px; }  
		#slider2 { width: 320px; height: 480px; }
		</style>


		<script>
		// Demo functions
		// **************
		$(function(){

			prettyPrint();

			// External Link with callback function
			$("#slide-jump").click(function(){
				$('#slider2').anythingSlider(4, function(slider){ /* alert('Now on page ' + slider.currentPage); */ });
				return false;
			});

			// External Link
			$("a.muppet").click(function(){
				$('#slider1').anythingSlider(5);
				$(document).scrollTop(0); // make the page scroll to the top so you can watch the video
				return false;
			});

			// Report Events to console & features list
			$('#slider1, #slider2').bind('before_initialize initialized swf_completed slideshow_start slideshow_stop slideshow_paused slideshow_unpaused slide_init slide_begin slide_complete', function(e, slider){
				// show object ID + event (e.g. "slider1: slide_begin")
				var txt = slider.$el[0].id + ': ' + e.type + ', now on panel #' + slider.currentPage;
				$('#status').text(txt);
				if (window.console && window.console.firebug){ console.debug(txt); } // added window.console.firebug to make this work in Opera
			});

			// Theme Selector (This is really for demo purposes only)
			var themes = ['minimalist-round','minimalist-square','metallic','construction','cs-portfolio'];
			$('#currentTheme').change(function(){
				var theme = $(this).val();
				$('#slider1').closest('div.anythingSlider')
					.removeClass( $.map(themes, function(t){ return 'anythingSlider-' + t; }).join(' ') )
					.addClass('anythingSlider-' + theme);
				$('#slider1').anythingSlider(); // update slider - needed to fix navigation tabs
			});

			// Add a slide
			var imageNumber = 1;
			$('button.add').click(function(){
				$('#slider1')
					.append('<li><img src="Slider/demos/images/slide-tele-' + (++imageNumber%2 + 1)  + '.jpg" alt="" /></li>')
					.anythingSlider(); // update the slider
			});
			$('button.remove').click(function(){
				$('#slider1 > li:not(.cloned):last').remove();
				$('#slider1').anythingSlider(); // update the slider
			});

		});

	</script>

	<script>
		// Set up Sliders
		// **************
		$(function(){

			$('#slider1').anythingSlider({
				theme           : 'metallic',
				easing          : 'easeInOutBack',
				navigationFormatter : function(index, panel){
					return ['Slab', 'Parking Lot', 'Drive', 'Glorius Dawn', 'Bjork?', 'Traffic Circle'][index - 1];
				},
				onSlideComplete : function(slider){
					// alert('Welcome to Slide #' + slider.currentPage);
				}
			});
			
			
			
			$('#slider2').anythingSlider({
				theme           : 'metallic',
				easing          : 'easeInOutBack',
				navigationFormatter : function(index, panel){
					return ['Slab', 'Parking Lot', 'Drive', 'Glorius Dawn', 'Bjork?', 'Traffic Circle'][index - 1];
				},
				onSlideComplete : function(slider){
					// alert('Welcome to Slide #' + slider.currentPage);
				}
			});
			
			
			
/*
			$('#slider2').anythingSlider({
				mode                : 'f',   // fade mode - new in v1.8!
				resizeContents      : false, // If true, solitary images/objects in the panel will expand to fit the viewport
				navigationSize      : 3,     // Set this to the maximum number of visible navigation tabs; false to disable
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['Recipe', 'Quote', 'Image', 'Quote #2', 'Image #2'][index - 1];
				},
				onSlideBegin: function(e,slider) {
					// keep the current navigation tab in view
					slider.navWindow( slider.targetPage );
				}
			});
*/
			// tooltips for first demo
			$.jatt();

		});
	</script>
	
	<!-- GOTOVO RIJEŠENJE ZA SLIDER - kraj -->
	
	</head>
	
<?php session_destroy(); ?>

	<body style="
	background-image: url('pozadina4.png');
	background-repeat: no-repeat;
	background-position:top center;
	">
		<div id="glavni">
			
			<header>
				<h1>MOJ NOVČANIK</h1>
			</header>



			<div id="formaLog">
			
				<div class="logoNovcanik">
					<img src="logo.png">
				</div>
				
				<form name="login" action="index.php" method="POST" enctype="multipart/form-data" >
				   
				   	<input id="username" type="text" placeholder="Korisničko ime" name="username" required/> 
					
					<div class="crta">
						<i></i>
					</div>  
				
					<input id="pass" type="password" placeholder="Lozinka" name="pass" required/>
					<br/>   
					<button>Prijava</button>
					
				</form>
				   
				<form name="reg" action="registracija.html" method="POST" enctype="multipart/form-data"><br/>
				 	<button>Registracija</button> 
				</form>
								
			</div>
			
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			
			<hr/>
			
			<h2>Moj Novčanik - PC</h2>
			
			<br/>
			
			<!-- AnythingSlider #1 -->
			<ul id="slider1">

					<li><img src="PC/screen1.PNG" alt="Screen1" width="456"	height="306"></li>

					<li><img src="PC/screen2.PNG" alt="Screen2" width="456"	height="306"></li>

					<li><img src="PC/screen3.PNG" alt="Screen3" width="456"	height="306"></li>

					<li><img src="PC/screen4.PNG" alt="Screen4" width="456"	height="306"></li>
					
					<li><img src="PC/screen5.PNG" alt="Screen5" width="456"	height="306"></li>
					
					<li><img src="PC/screen6.PNG" alt="Screen6" width="456"	height="306"></li>

			</ul>  
			<!-- END AnythingSlider #1 -->
			
			<br/>
			<br/>
			
			Preuzmite aplikaciju <b>MOJ NOVČANIK</b> za računalo 
			<br/>
			<br/>
				
			<div id="preuzimanje">
				<a href="PC/Moj Novčanik.exe" download="Moj Novčanik.exe"><img id="logoPC" src="PC/PC.png" alt="PC" width="50" height="50"></a>
				
			</div>
				
			<br/>
			<br/>
			
			<hr/>
					
			<h2>Moj Novčanik - Android</h2>
			
			<br/>
			
			<!-- AnythingSlider #1 -->
			<ul id="slider2">

					<li><img src="Android/screen1.png" alt="Screen1" width="456"	height="306"></li>

					<li><img src="Android/screen2.png" alt="Screen2" width="456"	height="306"></li>

					<li><img src="Android/screen3.png" alt="Screen3" width="456"	height="306"></li>

					<li><img src="Android/screen4.png" alt="Screen4" width="456"	height="306"></li>
					
					<li><img src="Android/screen5.png" alt="Screen5" width="456"	height="306"></li>
					
					<li><img src="Android/screen6.png" alt="Screen6" width="456"	height="306"></li>

			</ul>  
			<!-- END AnythingSlider #1 -->
			
			<br/>
			<br/>
			
			Preuzmite aplikaciju <b>MOJ NOVČANIK</b> za pametni telefon 
			<br/>
			<br/>
				
			<div id="preuzimanje">
				<a href="Android/Moj Novčanik.apk" download="Moj Novčanik.apk"><img id="logoAndroid" src="Android/Android.png" alt="Android" width="50" height="50"></a>
				
			</div>
				
			<br/>
			<br/>
			
						
			<hr/>
			
			<h3 style="color:#7A7272;"><i>"Never spend your money before you have earned it."<br/>Thomas Jefferson</i></h3>
		   
			<footer>
				<p>Kreirao:&nbsp;&nbsp;&nbsp;&nbsp;Matko Horvat</p>
				<p>Kontakt:&nbsp;&nbsp;&nbsp;&nbsp;mhorvat5@tvz.hr</p>
				<p>Kreirano 2015.</p>
			</footer>   

		


		
			
			<?php
			session_start();



			$username=$_POST['username'];
			$pass=$_POST['pass'];
			$hash=md5($pass);


			
			$baza = mysqli_connect('sql5.freesqldatabase.com','sql578316','hM9%jX1!',"sql578316") or die("Neuspjelo spajanje na bazu!");
			//-------------------------------------------------------------------------
			
			$sql="SELECT ime, lozinka FROM korisnici WHERE ime=? AND lozinka=?";
			/* Inicijalizira statement objekt nad konekcijom */
			$stmt=mysqli_stmt_init($baza);
			/* Povezuje parametre statement objekt s upitom */
			if (mysqli_stmt_prepare($stmt, $sql))
			{
				/* Povezuje parametre i njihove tipove s statement objektom */
				mysqli_stmt_bind_param($stmt,'ss',$username,$hash);
				/* Izvršava pripremljeni upit i pohranjuje rezultate */
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
			}
			/* Povezuje atribute iz rezultata s varijablama */
			mysqli_stmt_bind_result($stmt, $a, $b);

			/* Dohvaća redak iz rezultata, i posprema vrijednosti atributa u
			varijable navedene funkcijom mysqli_stmt_bind_result() */
			mysqli_stmt_fetch($stmt);

			 
			if (mysqli_stmt_num_rows($stmt)>0){ 
				
				$_SESSION['username']=$username;
				
				echo "<script type='text/javascript'>location.href = 'glavna.php';</script>";

			}
				

			?>
					
		</div>
	</body>
</html>
