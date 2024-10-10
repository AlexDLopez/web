<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guardar</title>
</head>
<body>
    <?php
    include("conexion.php");
    $nomPhp=$_POST['nombretxt'];
    $prePhp=$_POST['preciotxt'];
   $marPhp=$_POST['marcatxt'];
   $disPhp=$_POST['disponibilidadtxt'];
   $Mcomphp=$_POST['mcompratxt'];


    $query="INSERT INTO tiendar VALUES ('$nomPhp','$prePhp','$marPhp','$disPhp','$Mcomphp')";

    $resultado=$conexion->query($query);
    header("location:consultasTI.php");
    ?>
</body>
</html>