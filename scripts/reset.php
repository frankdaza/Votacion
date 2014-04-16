<?php 

$mysqli = new mysqli("localhost", "usuario", "clave", "basededatos");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Actualizo la votación a cero de todos los canditados
$votos = $mysqli->query("UPDATE candidatos SET votos = 0 WHERE nombre = 'blanco' ");
$votos = $mysqli->query("UPDATE candidatos SET votos = 0 WHERE nombre = 'formula1' ");
$votos = $mysqli->query("UPDATE candidatos SET votos = 0 WHERE nombre = 'formula2' ");

header("location: ../administrador.php")

?>
