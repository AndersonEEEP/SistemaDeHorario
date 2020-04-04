<?php 
	require "conexao.php";
	$nome_disciplina = $_POST['nome_disciplina'];	
 	$sql = "INSERT INTO tb_disciplinas(dis_nome) VALUES('$nome_disciplina')";
 	$result = mysqli_query($conn, $sql);

 	 header('location:../disciplinas.php');
 ?>