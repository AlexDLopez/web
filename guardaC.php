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
    $bolphp=$_POST['boletostxt'];
    $prephp=$_POST['preciotxt'];
   $horphp=$_POST['horariotxt'];
   $rephp=$_POST['recorridotxt'];
   $disphp=$_POST['disponibilidadtxt'];


    $query="INSERT INTO controlz VALUES ('$bolphp','$prephp','$horphp','$rephp','$disphp')";

    $resultado=$conexion->query($query);
    header("location:consubol.php");
    ?>
</body>
</html>