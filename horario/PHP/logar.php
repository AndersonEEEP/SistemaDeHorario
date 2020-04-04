<?php
require "conexao.php";
session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$sql = "SELECT * from tb_coordenadores where cor_login = '$login' AND cor_senha = '$senha'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	if ($row==1) {
	 	$_SESSION['logado'] = "1";
	 	$nome = mysqli_fetch_assoc($result);
	 	$_SESSION['nome'] = $nome['cor_nome'];
	 	header('location:../organizar.php');
	 }else{
	 	header('location:../index.php?error=1');
	 } 
?>