<?php
	require "conexao.php";
	$id = $_GET['id'];
	$sql = "DELETE from tb_turmas where idtb_turmas = '$id'";
	$result = mysqli_query($conn, $sql);
	$ssql = "DELETE from segunda_feira where id_da_turma = '$id'";
	$sresult = mysqli_query($conn, $ssql);
	$tsql = "DELETE from terca_feira where id_da_turma = '$id'";
	$tresult = mysqli_query($conn, $tsql);
	$qsql = "DELETE from quarta_feira where id_da_turma = '$id'";
	$qresult = mysqli_query($conn, $qsql);
	$qisql = "DELETE from quinta_feira where id_da_turma = '$id'";
	$qiresult = mysqli_query($conn, $qisql);
	$ssql = "DELETE from sexta_feira where id_da_turma = '$id'";
	$sresult = mysqli_query($conn, $ssql);
	header('location:../turmas.php');

?>