<?php
require "../require/config.php";

// Define e inicializa las variables que se van a usar del formulario.
$name = $email = $phone = $address = $city = $communities = $Zcode = $othert = $format = $newscheck ="";


//Si (llega datos) Entonces
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<br><strong>Metodo post enviado<strong><br>";

}

?>