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
          <a href="menu2.html" class="brand-logo">Volver</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="formbol.php">Nueva venta</a></li>
           
          </ul>
        </div>
      </nav>
    <div class="container">
        <table>
            <thead>
              <tr>
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
                
    </div>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <div class="container"></div>
      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text"></h5>
              <p class="grey-text text-lighten-4"></p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text"></h5>
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
      