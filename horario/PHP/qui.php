<?php
include "conexao.php";
$qiturma = $_POST['qiturma'];
$qiaula1 = $_POST['qiaula1'];
$qiaula2 = $_POST['qiaula2'];
$qiaula3 = $_POST['qiaula3'];
$qiaula4 = $_POST['qiaula4'];
$qiaula5 = $_POST['qiaula5'];
$qiaula6 = $_POST['qiaula6'];
$qiaula7 = $_POST['qiaula7'];
$qiaula8 = $_POST['qiaula8'];
$qiaula9 = $_POST['qiaula9'];


$sql = "UPDATE quinta_feira SET primeira_aula = '$qiaula1',segunda_aula = '$qiaula2',terceira_aula = '$qiaula3',quarta_aula = '$qiaula4',quinta_aula = '$qiaula5',sexta_aula = '$qiaula6', setima_aula = '$qiaula7', oitava_aula = '$qiaula8', nona_aula = '$qiaula9' WHERE id_da_turma = '$qiturma' ";
$query = mysqli_query($conn, $sql);


?>
