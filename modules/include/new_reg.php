<?php
require "../require/config.php";
// ======= FUNCIONES Y VARIABLES  ===========
// Define e inicializa las variables que se van a usar del formulario.
$name = $email = $phone = $address = $city = $communities = $Zcode = $othert = $format = $newsletter = "";
// Define e inicializa variables para detectar fallos en las validaciones.
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

// ======= FUNCIONES Y VARIABLES END ===========

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//DEBUG
	print_r ($_POST);
	// END DEBUG
	// Variables requeridas para enviar a BBDD: name, email y phone.
	if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])) {
		echo "<br><strong>Llegan los datos requeridos por post.</strong><br>";
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
			$email_err = true; 
		}

		if (validar_phone($phone)){
			echo "<script> console.log('telefono es válido.')</script></br>"; 
		} else {
			$phone_err = true;
		}

		// Si todos los datos requeridos cumplen con la validación se sigue tratando los datos, si uno falla, se para y se manda mensaje
		// de aviso de donde ha fallado.
		if (validar_name($name) && validar_phone($phone) && validar_email($email)) {

			// Forma ternaria de poner un if con solo 2 opciones.
			// if (isset($_POST["address"])) ? $address = limpiar_dato($_POST["address"]) : $address = NULL;
			if (isset($_POST["address"])){
				$address = limpiar_dato($_POST["address"]); 
			} else {
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
			
			if (isset($_POST["format"])){
				$format = limpiar_dato($_POST["format"]);
				
			} else {
				$format = 0;
			}
			
			// $newsletter = limpiar_dato($_POST["newsletter"]);
			//echo "</br>";
			$newsletter = filter_input(
				INPUT_POST,
				'newsletter',
				FILTER_SANITIZE_SPECIAL_CHARS,
				FILTER_REQUIRE_ARRAY
			);
			var_dump($newsletter);
			echo "<br>Longitud de newsletter: " . count($newsletter) .".";

			echo "</br>";
			
			// === Usa un array y muestra sus valores separados por coma (o lo que se ponga entre comillas).
			$string=implode(", ",$newsletter);
			echo $string;
			echo "</br>";
			// === FIN MOSTRAR valores array.
			
			if (isset($_POST["othert"])){
				$othert = limpiar_dato($_POST["othert"]);
			} else {
				$othert = NULL; // Realmente null!?
			}
			
			// echo "<strong>Noticias que quiere recibir: $newsletter";
			
			// ==========================  BORRAME
			echo "<br><strong>Name:</strong> $name <br>";
			echo "<strong>Telefono:</strong> $phone <br>";
			echo "<strong>Email:</strong> $email <br>";
			echo "<strong>Address:</strong> $address <br>";
			echo "<strong>City: </strong> $city <br>";
			echo "<strong>Autonomous communities: </strong> $communities <br>";
			echo "<strong>Zip Code: </strong> $Zcode <br>";
			//echo "<strong>Newsletters: </strong> $newsletter <br>";
			echo "<strong>Newsletters(string): </strong> $string <br>";
			echo "<strong>Newsletter format: </strong> $format <br>";
			echo "<strong>Other topis...: </strong> $othert <br>";
			
			/* if (validar_name($name)){
				echo "validada";
			} else {
				echo "no valida";
			}; */
			// ======================  BORRAME
		} else {
			
			echo "Mensaje una de las validaciones a fallado.</br>";
			if ($name_err == true) {
				echo "Formato de: $name, <strong>no válido</strong><br>";
			} elseif ($email_err == true) {
				echo "Formato de: $email, <strong>no válido</strong><br>";
			} elseif ($phone_err == true) {
				echo "Formato de: $phone, <strong>no válido</strong><br>";
			}

		/* 	header("Location: ../../public/index.html");    <= Mirar como mandar mensaje a index.html
			exit(); */
		}	
			
	} else {
		echo "Mensaje de valores requerido no han llegado.";
	}
} else {
	echo "Método post no ha llegado.";
}
	
/* Si (llega datos) Entonces✔
    tratamos datos
	Si datos llegan los datos necesarios entonces✔
		limpiar la información. ✔
		//asegurar de que están bien escrito.
		validar la informacion. ✔
		Si cumple las validaciones seguimos con el reto de datos.✔
			Si no llegan variables?**
				Asignarles NULL. ✔
			si llegan
				limpiamos los datos y asignamos a las variables.✔
				Si hay información Entonces
					Mostrar que todos los datos son correctos para enviar a BBDD.✔
		Si alguna no cumple la validación o todas.
			Mensaje de aviso de que validación a fallado.
	SiNo
		Mensaje de aviso de que no han llegado los datos necesarios.
SiNo
	avisar no han llegado.
Fin Si */