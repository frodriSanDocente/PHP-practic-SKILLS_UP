<?php
function read()
{
    $query = 'SELECT * FROM news_reg';

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    $articulos = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $articulos;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
    <title>Usuarios inscritos</title>
    <link rel="icon" type="image/png" href="./images/pfae.png" sizes="64x64">

</head>
<body>
    <div><button type="submit">Inscritos</button></div>

    <div class="wrapper">

        <table>
            <thead>
                <tr>
                    <th>
                        Nombre completo
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Télefono
                    </th>
                    <th>
                        Dirección
                    </th>
                    <th>
                        Ciudad
                    </th>
                    <th>
                        Comunidad autónoma
                    </th>
                    <th>
                        Código Postal
                    </th>
                    <th>
                        Boletín de noticias
                    </th>
                    <th>
                        Formato
                    </th>
                    <th>
                        Sugerencias
                    </th>
                </tr>
            </thead>
            <tr>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
                <td>Lorem ipsun</td>
            </tr>
        </table>
    </div>
</body>
</html>