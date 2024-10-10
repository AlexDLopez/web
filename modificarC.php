<html>
<head>
</head>
<body>
<?php
include("conexion.php"); 
$id=$_REQUEST['boleto'];
$clave=$_POST['boleto']; 
$boleto=$_POST['Boletos']; 
$preciophp=$_POST['Precio']; 
$horphp=$_POST['Horario'];
   $recophp=$_POST['Recorrido'];
   $dispphp=$_POST['Dsiponibilidad'];
  

$query="UPDATE controlz SET Boletos='$boleto',Precio='$preciophp',Horario='$$horphp',Recorrido='$recophp',Dsiponibilidad='$dispphp' WHERE boleto='$id'";
 $resultado=$conexion->query($query);
if($resultado)
{
header("location:consultash.php");
}
else{
echo '<script language="javascript">alert("Error verifique e intente nuevamente");</script>';
}
?>
</body> </html>