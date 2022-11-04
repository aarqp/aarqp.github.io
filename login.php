<?php
$usuario = $_POST['nombre_de_usuario'];
$contrasena = $_POST['contrasena_usuario'];

if ( ( $usuario == "resp_escolar") && ( $contrasena == "unadm_responsable" ) ) {
  header("Location: Area administrativa.html");
} elseif ( ( $usuario != "resp_escolar") && ( $contrasena == "unadm_responsable" ) )  {
	include("Acceso a usuarios.html");
  ?> 
  <h1>Error: Usuario incorrecto</h1>	
  <?php
} elseif ( ( $usuario == "resp_escolar") && ( $contrasena != "unadm_responsable" ) ) {
	include("Acceso a usuarios.html");
   ?> 
     <h1>Error: Contraseña incorrecta</h1>	
  <?php
} else {
	include("Acceso a usuarios.html");
   ?> 
	<h1>Error: Usuario y contraseña incorrectas!</h1>	
  <?php
}
?>
