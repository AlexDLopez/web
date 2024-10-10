<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html"></a></li>
    <li><a href="badges.html"></a></li>
    <li><a href="collapsible.html"></a></li>
    <li><a href="mobile.html"></a></li>
  </ul>
  <div class="container">
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
  </div>
    <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Footer Content</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                <li><a class="grey-text text-lighten-3" href="#!"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
       
          <a class="grey-text text-lighten-4 right" href="#!"></a>
          </div>
        </div>
    </footer>
  </div>
          

    <!--JavaScript at end of body for optimized loading-->
    <script>
         document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>