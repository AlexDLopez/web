<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <center>
<i><font color "purple"><h1>Datos a consultar</h1></font></i>
<table width="50%" height="60%" border "2" bgcolor="pink">
    <tr bgcolor="white">
        <th colspan="1"><a href="formulario.php">Nuevo Animal</a></th>
        <th colspan="6">Animales registrados</th>
</tr>
<tr>
    <td>Clave</td>
    <td>Nombre</td>
    <td>ID</td>
    <td>Habitat</td>
    <td>Foto</td>
    <td>EDITAR</td>
    <td>ELIMINAR</td>
 
</tr>
<?php
include("conexion.php");
$query="SELECT * FROM zoologico";

$resultados=$conexion->query($query);
while($row=$resultados->fetch_assoc())
{
?>

<tr>
    <td><?php echo $row['Clave'];?></td>
    <td><?php echo $row['Nombre'];?></td>
    <td><?php echo $row['ID'];?></td>
    <td><?php echo $row['Habitat'];?></td>
    <td><img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['Foto']);?>"/></td>
    <td><a href="formODIFICAR.php?Clave=<?php echo $row['Clave'];?>">Modificar</a></td>
    <td><a href="borrar.php?Clave=<?php echo $row['Clave'];?>">Eliminar</a></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>