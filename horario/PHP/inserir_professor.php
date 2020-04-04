<?php
	require "conexao.php";
	$nome_professor = $_POST['nome_professor'];
	$ch_professor = $_POST['ch_professor'];
	$sql = "INSERT into tb_professores(prof_nome, prof_ch) VALUES ('$nome_professor','$ch_professor')";
	$result = mysqli_query($conn, $sql);

	$sql3 = "SELECT * from tb_professores where prof_nome = '$nome_professor' ";
	$result3 = mysqli_query($conn,$sql3);
	$linha = mysqli_fetch_assoc($result3);
		$id = $linha['idtb_professores'];
	

	$sql2 = "SELECT * FROM  tb_disciplinas";
		$result2 = mysqli_query($conn, $sql2);
		$numero =1;
		while ($row = mysqli_fetch_assoc($result2)) {
			if ($_POST[$numero] == $row['iddisciplinas']) {
				$iddis = $_POST[$numero];
				$sql4 = "INSERT INTO tb_disciplinas_has_tb_professores (tb_disciplinas_iddisciplinas,tb_professores_idtb_professores) VALUES ('$iddis','$id')";
				$result4 = mysqli_query($conn,$sql4);
			}
	     	$numero = $numero+1;
		}


header('location:../professores.php');
?>