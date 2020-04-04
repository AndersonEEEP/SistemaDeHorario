<?php
include "conexao.php";
$tturma = $_POST['tturma'];
$taula1 = $_POST['taula1'];
$taula2 = $_POST['taula2'];
$taula3 = $_POST['taula3'];
$taula4 = $_POST['taula4'];
$taula5 = $_POST['taula5'];
$taula6 = $_POST['taula6'];
$taula7 = $_POST['taula7'];
$taula8 = $_POST['taula8'];
$taula9 = $_POST['taula9'];


$sql = "UPDATE terca_feira SET primeira_aula = '$taula1',segunda_aula = '$taula2',terceira_aula = '$taula3',quarta_aula = '$taula4',quinta_aula = '$taula5',sexta_aula = '$taula6', setima_aula = '$taula7', oitava_aula = '$taula8', nona_aula = '$taula9' WHERE id_da_turma = '$tturma'";
$query = mysqli_query($conn, $sql);


?>
