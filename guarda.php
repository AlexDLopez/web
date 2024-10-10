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
    $clavephp=$_POST['clavetxt'];
    $nombrephp=$_POST['nombretxt'];
   $idphp=$_POST['idtxt'];
   $habitatphp=$_POST['habitattxt'];

$fotophp=addslashes(file_get_contents($_FILES['fototxt']['tmp_name']));
    $query="INSERT INTO zoologico VALUES ('$clavephp','$nombrephp','$idphp','$habitatphp','$fotophp')";

    $resultado=$conexion->query($query);
    header("location:tabla.php");
    ?>
</body>
</html>