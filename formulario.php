<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="guarda.php" method="POST" enctype="multipart/form-data">
        Clave<input type="text" name="clavetxt" value="">
        Nombre <input type="text" name= "nombretxt" value="">
        Habitat <input type="text" name= "habitattxt" value="">
        ID <input type="text" name= "idtxt" value="">
        Foto<input type="file"name="fototxt" value="">
     
        <button type="submit">guarda</button>

</form>
</body>
</html>