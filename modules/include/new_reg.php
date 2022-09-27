<?php
require "../require/config.php";

// Define e inicializa las variables que se van a usar del formulario.
$name = $email = $phone = $address = $city = $communities = $Zcode = $othert = $format = $newscheck ="";


//Si (llega datos) Entonces
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<br><strong>Metodo post enviado<strong><br>";

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