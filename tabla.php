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
            <li><a href="formulario2.html">Nuevo Animal</a></li>
           
          </ul>
        </div>
      </nav>
    <div class="container">
        <table>
            <thead>
              <tr>
                  <th>Clave</th>
                  <th>Nombre</th>
                  <th>ID</th>
                  <th>Habitat</th>
                  <th>Foto</th>
              
              </tr>
            </thead>
            <tbody>
              <?php
              include("conexion.php");
              $query="SELECT * FROM zoologico";
              
              $resultados=$conexion->query($query);
              while($row=$resultados->fetch_assoc())
              {
              ?>
              
              <tr>
                  <td><?php echo $row['Clave'];?></td>
                  <td><?php echo $row['Nombre'];?></td>
                  <td><?php echo $row['ID'];?></td>
                  <td><?php echo $row['Habitat'];?></td>
                  <td><img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['Foto']);?>"/></td>
                  <td><a href="modificarA.php?Clave=<?php echo $row['Clave'];?>">Modificar</a></td>
                  <td><a href="borrar.php?Clave=<?php echo $row['Clave'];?>">Eliminar</a></td>
              </tr>
              <?php
              }
              ?>
     
            </tbody>
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
      