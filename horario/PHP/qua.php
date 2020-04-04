<?php
include "conexao.php";
$qturma = $_POST['qturma'];
$qaula1 = $_POST['qaula1'];
$qaula2 = $_POST['qaula2'];
$qaula3 = $_POST['qaula3'];
$qaula4 = $_POST['qaula4'];
$qaula5 = $_POST['qaula5'];
$qaula6 = $_POST['qaula6'];
$qaula7 = $_POST['qaula7'];
$qaula8 = $_POST['qaula8'];
$qaula9 = $_POST['qaula9'];


$sql = "UPDATE quarta_feira SET primeira_aula = '$qaula1',segunda_aula = '$qaula2',terceira_aula = '$qaula3',quarta_aula = '$qaula4',quinta_aula = '$qaula5',sexta_aula = '$qaula6', setima_aula = '$qaula7', oitava_aula = '$qaula8', nona_aula = '$qaula9' WHERE id_da_turma = '$qturma' ";
$query = mysqli_query($conn, $sql);


?>
