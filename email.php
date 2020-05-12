<?
if (isset($_POST['enviar'])){
	if(!empty($_POST['nombre'])) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']){
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$asunto = $_POST[ásunto];
		$mensaje = $_POST['mensaje'];
		$header = "From: consultascompumundo@gmail.com" . "\r\n";
		$header = "Reply-To: consultascompumundo@gmail.com" . "\r\n";
		$header = "X-Mailer: PHP/" . phpversion();
		$mail = @mail($email,$asunto,$mensaje,$header);
		if($mail){
			echo "<h4> ¡Mail enviado exitosamente! </h4>";
		}
	}
	
}