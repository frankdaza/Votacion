<?php 

$mysqli = new mysqli("localhost", "usuario", "clave", "basededatos");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Obtengo el valor de votación de formula 1
$query = $mysqli->query("SELECT votos FROM candidatos WHERE nombre = 'blanco' ");

$row = mysqli_fetch_array($query);

// Agrego un voto más 
$votos = $row[0] + 1;

// Actualizo la votación
$query = $mysqli->query("UPDATE candidatos SET votos = $votos WHERE nombre = 'blanco' ");

header("location: ../gracias.html");

?>
