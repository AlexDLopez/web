
<html>
<head>
</head>
<body>
<?php
include("conexion.php"); 
$id=$_REQUEST['Clave'];
$clave=$_POST['Clave']; 
$nombrephp=$_POST['Nombre']; 
$idphp=$_POST['ID'];
   $habitatphp=$_POST['Habitat'];
   $foto_h=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

$query="UPDATE zoologico SET Nombre='$nombrephp',Foto='$Foto',ID='$idphp',Habitat='$habitatphp' WHERE Clave='$id'";
 $resultado=$conexion->query($query);
if($resultado)
{
header("location:Consultas.php");
}
else{
echo '<script language="javascript">alert("Error verifique e intente nuevamente");</script>';
}
?>
</body> </html>