<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include</title>
</head>
<body>
    <?php
    include("conexion.php");

    $clavephp=$_POST ['clavetxt'];
    $nombrephp=$_POST['nombretxt'];

    $fotophp=addslashes(file_get_contents($_FILES['fototxt']['tmp_name']));
    

    $query=("INSERT INTO zoologico VALUES('','$nombrephp','$fotophp')");
    $resultado=$conexion->query($query);
    
    if($resultado){
    echo"LISTO!";
    }
    else{
        echo "ERROR";
    }
?>

</body>
</html>