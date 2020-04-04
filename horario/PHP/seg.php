<?php
include "conexao.php";
$turma = $_POST['turma'];
$aula1 = $_POST['aula1'];
$aula2 = $_POST['aula2'];
$aula3 = $_POST['aula3'];
$aula4 = $_POST['aula4'];
$aula5 = $_POST['aula5'];
$aula6 = $_POST['aula6'];
$aula7 = $_POST['aula7'];
$aula8 = $_POST['aula8'];
$aula9 = $_POST['aula9'];


$sql = "UPDATE segunda_feira SET primeira_aula = '$aula1',segunda_aula = '$aula2',terceira_aula = '$aula3',quarta_aula = '$aula4',quinta_aula = '$aula5',sexta_aula = '$aula6', setima_aula = '$aula7', oitava_aula = '$aula8', nona_aula = '$aula9' WHERE id_da_turma = '$turma' ";
$query = mysqli_query($conn, $sql);


?>
