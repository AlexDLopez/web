<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <center>
<i><font color "purple"><h1>Bienvenido al zoologico villareal</h1></font></i>
<table width="50%" height="60%" border "2" bgcolor="pink">
    <tr bgcolor="white">
        <th colspan="1"><a href="formularioC.php">Nuevo registro</a></th>
        <th colspan="6">Datos</th>
</tr>
<tr>
    <td>Boletos</td>
    <td>Precio</td>
    <td>Horario</td>
    <td>Recorrido</td>
    <td>Disponibilidad</td>



</tr>
<?php
include("conexion.php");
$query="SELECT * FROM controlz";
$resultados=$conexion->query($query);
while($row=$resultados->fetch_assoc())
{
?>

<tr>
    <td><?php echo $row['Boletos'];?></td>
    <td><?php echo $row['Precio'];?></td>
    <td><?php echo $row['Horario'];?></td>
    <td><?php echo $row['Recorrido'];?></td>
    <td><?php echo $row['Disponibilidad'];?></td>

</tr>
<?php
}
?>
</table>
</center>
</body>
</html>