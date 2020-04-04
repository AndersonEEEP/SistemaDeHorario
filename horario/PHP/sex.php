<?php
include "conexao.php";
$sturma = $_POST['sturma'];
$saula1 = $_POST['saula1'];
$saula2 = $_POST['saula2'];
$saula3 = $_POST['saula3'];
$saula4 = $_POST['saula4'];
$saula5 = $_POST['saula5'];
$saula6 = $_POST['saula6'];
$saula7 = $_POST['saula7'];
$saula8 = $_POST['saula8'];
$saula9 = $_POST['saula9'];


$sql = "UPDATE sexta_feira SET primeira_aula = '$saula1',segunda_aula = '$saula2',terceira_aula = '$saula3',quarta_aula = '$saula4',quinta_aula = '$saula5',sexta_aula = '$saula6', setima_aula = '$saula7', oitava_aula = '$saula8', nona_aula = '$saula9' WHERE id_da_turma = '$sturma' ";
$query = mysqli_query($conn, $sql);


?>
