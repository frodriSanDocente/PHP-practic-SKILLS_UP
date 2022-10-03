<?php
require "../require/config.php";

// Define e inicializa las variables que se van a usar del formulario.
$name = $email = $phone = $address = $city = $communities = $Zcode = $othert = $format = $newsletter = "";
$name_err = $email_err = $phone_err = false;
/**
 * Función para limpiar un dato procedentes de un formulario.
 * 
 * @param  $data
 * @return $data
 */
function limpiar_dato($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// nombre, email y nº telefono.
/**
 * Función para validar nombre que solo contenga letras min y MAY, y espacio en blanco.
 * 
 * @param $name
 * @return boolean
 */
function validar_name($name)
{
	if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
		return false;
	} else {
		return true;
	}
}

/**
 * Función que valida un email
 * 
 * @param $name
 * return boolean
 */
function validar_email($email)
{
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return false;
	} else {
		return true;
	}
}


// TODO: Documentar función.
/**
 * Validar un número de telefono.
 * 
 * @param $phone
 * @return Boolean
 */
function validar_phone($phone)
{
	if (!preg_match('/^[0-9]{9}+$/', $phone)) {
		return false;
	} else {
		return true;
	}
}

//Si (llega datos) Entonces
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	print_r ($_POST);
	// echo "<br><strong>Metodo post enviado<strong><br>";
	// Variables requeridas para enviar a BBDD: name, email y phone.
	if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])) {
		echo "<br><strong>Llegan al menos los datos necesarios por post hay datos</strong><br>";
		$name = limpiar_dato($_POST["name"]);
		$email = limpiar_dato($_POST["email"]);
		$phone = limpiar_dato($_POST["phone"]);
		if (validar_name($name)){
			echo "<script> console.log('name es válido.')</script></br>";
		} else {
			$name_err = true;
		}

		if (validar_email($email)) {
			echo "<script> console.log('email es válido.')</script></br>"; 
		} else {
			$email_err = true 
		}

		if (validar_phone($phone)){
			echo "<script> console.log('telefono es válido.')</script></br>"; 
		} else {
			echo "Formato telefono no válido.";
		}

		// Condicion si no se cumple, parar el código.
		if (validar_name($name) || validar_phone($phone) || validar_email($email)) {
			Ejecutas el resto
			
			// if (isset($_POST["address"])) ? $address = limpiar_dato($_POST["address"]) : $address = NULL;
			if (isset($_POST["address"])){
				$address = limpiar_dato($_POST["address"]); 
			} else{
				$address = NULL;
			}
			
			if (isset($_POST["city"])){
				$city = limpiar_dato($_POST["city"]);
			} else {
				$city = NULL;
			}
			
			if (isset($_POST["communities"])){
				$communities = limpiar_dato($_POST["communities"]);
			} else {
				$communities = NULL;
			}
			
			
			if (isset($_POST["Zcode"])){
				$Zcode = limpiar_dato($_POST["Zcode"]);
			} else {
				$Zcode = NULL;
			}
			
			
			$format = limpiar_dato($_POST["format"]);
			// $newsletter = limpiar_dato($_POST["newsletter"]);
			//echo "</br>";
			/* 			$newsletter = filter_input(
				INPUT_POST,
				'newsletter',
				FILTER_SANITIZE_SPECIAL_CHARS,
				FILTER_REQUIRE_ARRAY
			); */
			//var_dump($newsletter);
			// echo "</br>";
			
			// === Usa un array y muestra sus valores separados por coma (o lo que se ponga entre comillas).
			/* 	$string=implode(", ",$newsletter);
			echo $string;
			echo "</br>"; */
			// === FIN MOSTRAR valores array.
			
			if (isset($_POST["othert"])){
				$othert = limpiar_dato($_POST["othert"]);
			} else {
				$othert = NULL;
			}
			echo "<strong>Noticias que quiere recibir: $newsletter";
			
			// ==========================  BORRAME
			echo "<br><strong>Name:</strong> $name <br>";
			echo "<strong>Telefono:</strong> $phone <br>";
			echo "<strong>Address:</strong> $address <br>";
			echo "<strong>City: </strong> $city <br>";
			echo "<strong>Autonomous communities: </strong> $communities <br>";
			echo "<strong>Zip Code: </strong> $Zcode <br>";
			echo "<strong>Newsletters: </strong> $newsletter <br>";
			echo "<strong>Newsletter format: </strong> $format <br>";
			echo "<strong>Other topis...: </strong> $othert <br>";
			
			if (validar_name($name)){
				echo "validada";
			} else {
				echo "no valida";
			};
			// ======================  BORRAME
			
			
		}
	} else {
		MEnsaje una de las validaciones no funciona.
	}
} else {
	echo "Método post no ha llegado.";
}
	
	/* Si (llega datos) Entonces
    tratamos datos
	Si si hay información Entonces
				Si no llegan variables?**
					Asignarles NULL.
				limpiar la información. check!!
				validar la informacinon.
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