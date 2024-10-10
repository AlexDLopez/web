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
    $id=$_REQUEST['Clave'];
    $query = "DELETE FROM zoologico WHERE Clave = '$id' ";
    $resultado = $conexion->query($query);
    if($resultado)
    {
        header("location:tabla.php");
    }
    else
    {
        echo"ERROR, VERIFICA LOS  ADATPS E INTENTALO DE NUEVO";
    }
    ?>
</body>
</html>