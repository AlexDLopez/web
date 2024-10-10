<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexion</title>
</head>
<body> 
    <?php
    $conexion =new mysqli("localhost","root","", "zoologico");
    if($conexion){
        echo "conexion exitosa :)";
    }
    else{

    
    echo "conexion no exitosa";
}
?>

</body>
</html>