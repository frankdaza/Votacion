<?php 
$mysqli = new mysqli("localhost", "usuario", "clave", "basededatos");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Frank Edward Daza González">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Votación Personero y Presidente Estudiantil | Liceos del Ejército Pichincha</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">          
          <a class="navbar-brand" href="#">Liceos del Ejército Pichincha</a>
        </div>        
      </div>
    </div>

    <div class="container">

      <div class="starter-template">

        <h1>Administrador de Resultados</h1>        
        <br><br>


        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/formula1.jpg" data-src="holder.js/300x200">
              <div class="caption">
                <h3>Fórmula 1</h3>
                <p>MIGUEL ANDRÉS SIERRA DUQUE</p>
                <p>MIGUEL ADOLFO MEJIA QUIJANO</p>
                <?php 
                  // Obtengo el valor de votación de formula 1
                  $query = $mysqli->query("SELECT votos FROM candidatos WHERE nombre = 'formula1' ");

                  $row1 = mysqli_fetch_array($query);
                  echo "<h3>Votos: $row1[0]</h3>";
                ?>                
              </div>
            </div>
          </div>    

          <div class="col-sm-12 col-md-4">
            <div class="thumbnail">
              <img src="img/blanco.jpg" data-src="holder.js/300x200">
              <div class="caption">                            
                <?php 
                  // Obtengo el valor de votación de formula 1
                  $query = $mysqli->query("SELECT votos FROM candidatos WHERE nombre = 'blanco' ");

                  $row2 = mysqli_fetch_array($query);
                  echo "<h3>Votos: $row2[0]</h3>";
                ?>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/formula2.jpg" data-src="holder.js/300x200">
              <div class="caption">
                <h3>Fórmula 2</h3>
                <p>CRISTHIAN CAMILO VELASQUEZ CARDONA</p>
                <p>DIEGO FERNANDO CANO ACOSTA</p>
                <?php 
                  // Obtengo el valor de votación de formula 1
                  $query = $mysqli->query("SELECT votos FROM candidatos WHERE nombre = 'formula2' ");

                  $row3 = mysqli_fetch_array($query);
                  echo "<h3>Votos: $row3[0]</h3>";
                ?>
              </div>
            </div>
          </div>        
        </div><!-- End Class Row -->

        <h1>TOTAL VOTOS</h1>
        <?php
          $total = $row1[0] + $row2[0] + $row3[0];
          echo "<h2>$total</h2>";
        ?>

        <form method="post" action="scripts/reset.php">
          <input type="submit" value="Resetear" class="btn btn-primary" >
        </form>

      </div><!-- End Started template -->



      <footer>
        <hr>
        <p>
          &copy; Votaciones de Personero y Presidente Estudiantil - Liceos del Ejército Pichincha.
          <br>
          Programación y Diseño Web &middot; <a href="http://frankdaza.co" target="_blank"><b>Frank Edward Daza González</b></a>.
          <br>
          2014
        </p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
