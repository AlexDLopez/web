<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="guardaTi.php" method="POST" enctype="multipart/form-data">
        NombreP<input type="text" name="nombretxt" value="">
        PrecioP <input type="text" name= "preciotxt" value="">
        MarcaP <input type="text" name= "marcatxt" value="">
        Disponibilidad <input type="text" name= "disponibilidadtxt" value="">
        Mcompra<input type="text" name= "mcompratxt" value="">
     
        <button type="submit">guarda</button>

</form>
</body>
</html>