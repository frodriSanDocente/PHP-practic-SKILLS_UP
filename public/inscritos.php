<?php
require "../modules/require/config.php";
htmlspecialchars($_SERVER['PHP_SELF']);
$_SERVER['REQUEST_METHOD'] == null;
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
    <main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                
                <button type="submit" name="MostrarInscritos">Usuarios Inscritos</button>
            </form>
        <?php else : ?>
                <?php
                echo "<div class='wrapper'>";
                // require __DIR__ .  '/inc/post.php';
                $sql = "SELECT * FROM news_reg";
                $stmt = $conn->prepare($sql);
                $stmt -> execute();

                if ($result = $stmt->setFetchMode(PDO::FETCH_ASSOC)) {
                    echo "<table>
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
                    </thead>";
                    // output data of each row
                    foreach(($rows = $stmt->fetchAll()) as $row) {
                        echo "<tr>
                        <td>".$row["fullname"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["phone"]."</td>
                        <td>".$row["address"]."</td>
                        <td>".$row["city"]."</td>
                        <td>".$row["state"]."</td>
                        <td>".$row["zipcode"]."</td>
                        <td>".$row["newsletters"]."</td>
                        <td>".$row["format_news"]."</td>
                        <td>".$row["suggestion"]."</td>
                        </tr>";
                    }
                    echo "</tr>
                    </table>";
                } else {
                    echo "<p> 0 results, no found data.</p><br>";
                }
                $conn = null;
                ?>
            <?php endif ?>
        </div>
    </main>

</body>

</html>