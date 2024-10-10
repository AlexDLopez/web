<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <center>
<i><font color "purple"><h1>Bienvenido A La Tienda de Regalos!</h1></font></i>
<table width="50%" height="60%" border "2" bgcolor="pink">
    <tr bgcolor="white">
        <th colspan="1"><a href="formTienda.php">Nuevo Producto</a></th>
        <th colspan="6">Datos</th>
</tr>
<tr>
    <td>NombreP</td>
    <td>PrecioP</td>
    <td>MarcaP</td>
    <td>Disponibilidad</td>
    <td>MCompra</td>
   


</tr>
<?php
include("conexion.php");
$query="SELECT * FROM tiendar";
$resultados=$conexion->query($query);
while($row=$resultados->fetch_assoc())
{
?>

<tr>
    <td><?php echo $row['NombreP'];?></td>
    <td><?php echo $row['PrecioP'];?></td>
    <td><?php echo $row['MarcaP'];?></td>
    <td><?php echo $row['DisponibilidadP'];?></td>
    <td><?php echo $row['Compra'];?></td>

</tr>
<?php
}
?>
</table>
</center>
</body>
</html>