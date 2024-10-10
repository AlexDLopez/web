<html>
<head>
<title>Modificar</title>
</head>
<body>
<center>
<i> <font color="purple"><h1>Modifica</h1> </font></i>
<?php
include("conexion.php");
$id=$_REQUEST['Clave'];
$query="SELECT * FROM zoologico WHERE Clave='$id'"; 
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
?>
<form action="modificar.php?id=<?php $row['Clave']; ?>"method="POST" enctype="multipart/form-data"><br> 
Clave:<input type="text" REQUIRED name="Clave" placeholder="Automatica" value="<?php echo $row['Clave']; ?>"/><br><br> 
Nombre:<input type="text" REQUIRED name="Nombre" placeholder="Solo nombre" value="<?php echo $row['Nombre']; ?>"/><br><br> 
ID: <input type="text" REQUIRED name="ID" placeholder="Solo nombre" value="<?php echo $row['ID']; ?>"/><br><br> 
Habitat<input type="text" REQUIRED name="Habitat" placeholder="Edad..." value="<?php echo $row['Habitat']; ?>"/><br><br> 
<img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['Foto']); ?>"/><br><br> <input type="file" name="Foto" value=""/>
<input type="submit" value="Aceptar"/>
</form>
</center>
</body>
</html>