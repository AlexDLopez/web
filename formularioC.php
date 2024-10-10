<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="guardaC.php" method="POST" enctype="multipart/form-data">
    Boletos	<input type="text" name="boletostxt" value="">
    Precio <input type="text" name= "preciotxt" value="">
    Horario <input type="text" name= "horariotxt" value="">
    Recorrido <input type="text" name= "recorridotxt" value="">
    Disponibilidad <input type="text" name= "disponibilidadtxt" value="">
       
     
        <button type="submit">guarda</button>

</form>
</body>
</html>