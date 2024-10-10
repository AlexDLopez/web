<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>borrar</title>
</head>
<body>
    <?php
    include("conexion.php");
    $id=$_REQUEST['boleto'];
    $query = "DELETE FROM controlz WHERE boleto = '$id' ";
    $resultado = $conexion->query($query);
    if($resultado)
    {
        header("location:consultash.php");
    }
    else
    {
        echo"ERROR, VERIFICA LOS  ADATPS E INTENTALO DE NUEVO";
    }
    ?>
</body>
</html>