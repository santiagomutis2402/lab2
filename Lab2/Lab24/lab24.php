<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.4</title>
</head>

<body>
    <?php
    //Creacion del arreglo array ("clave => "Valor"")
    $personas = array(
        "Juan" => "Panama",
        "John" => "USA",
        "Eica" => "Finlandia",
        "Kusanagi" => "Japon"
    );
    //Recorrer todo el arreglo
    foreach ($personas as $persona => $pais) {
        print "$persona es de $pais <br>";
    }
    //Impresion especifica
    echo "<br>" . $personas["Juan"];
    echo "<br>" . $personas["Eica"];
    ?>
</body>

</html>