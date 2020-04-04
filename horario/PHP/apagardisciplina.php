<?php
	require "conexao.php";
	$id = $_GET['id'];
	$sql = "DELETE from tb_disciplinas where iddisciplinas = '$id'";
	$result = mysqli_query($conn, $sql);
	header('location:../disciplinas.php');

?>