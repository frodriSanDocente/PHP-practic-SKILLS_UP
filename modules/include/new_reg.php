<?php
require "../require/config.php";

// Define e inicializa las variables que se van a usar del formulario.
$name = $email = $phone = $address = $city = $communities = $Zcode = $othert = $format = $newscheck ="";


//Si (llega datos) Entonces
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // echo "<br><strong>Metodo post enviado<strong><br>";
		if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])) {
        	echo "<br><strong>name post hay datos<strong><br>";
			$name = $_POST["name"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			$city = $_POST["city"];
			$communities = $_POST["communities"];
			$Zcode = $_POST["Zcode"];
			$format = $_POST["format"];
			$newscheck = $_POST["newscheck"];
			$othert = $_POST["othert"];

			function limpiar_dato($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
			}


			// nombre, email y nº telefono.
			function validar_name($name){
				if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
					return false;
				} else {
					return true;
				}
			}
		}

}

/* Si (llega datos) Entonces
    tratamos datos
		Si si hay información Entonces
				limpiar la información.
				validar la informaciñon.
				Si datos necesarios Entonces
					asegurar de que están bien escrito.
				SiNo
					mandamos dato tal cual.
				Fin Si
				Mostrar que todos los datos son correctos para enviar a BBDD.
		SiNo
			enviar datos necesarios
		Fin Si
SiNo
	avisar no han llegado.
Fin Si */

?>