<?php
	require "conexao.php";
	$nome_turma = $_POST['nome_turma'];
	$sql = "INSERT into tb_turmas(tur_nome) VALUES ('$nome_turma')";
	$result = mysqli_query($conn, $sql);
	$sql3 = "SELECT * from tb_turmas where tur_nome = '$nome_turma' ";
	$result3 = mysqli_query($conn,$sql3);
	$linha = mysqli_fetch_assoc($result3);
	$id = $linha['idtb_turmas'];
	$sql2 = "SELECT * FROM  tb_disciplinas";
		$result2 = mysqli_query($conn, $sql2);
		$numero = 1;

	$sqlseg	= "INSERT into segunda_feira(id_da_turma) VALUES($id)";
	$resultseg = mysqli_query($conn, $sqlseg);
	$sqlt 	= "INSERT into terca_feira(id_da_turma) VALUES($id)";
	$result = mysqli_query($conn, $sqlt);
	$sqlq 	= "INSERT into quarta_feira(id_da_turma) VALUES($id)";
	$resultq = mysqli_query($conn, $sqlq);
	$sqlqi 	= "INSERT into quinta_feira(id_da_turma) VALUES($id)";
	$resultqi= mysqli_query($conn, $sqlqi);
	$sqlsex = "INSERT into sexta_feira(id_da_turma) VALUES($id)";
	$resultse= mysqli_query($conn, $sqlsex);


		while ($row = mysqli_fetch_assoc($result2)) {
			if ($_POST[$numero] == $row['iddisciplinas']) {
				$iddis = $_POST[$numero];
				$numerodeaula = "$numero"."a";
				$qntd = $_POST[$numerodeaula];
				$qntdaulas = $numerodeaula;
				$sql4 = "INSERT INTO tb_disciplinas_has_tb_turmas (	tb_disciplinas_iddisciplinas,tb_turmas_idtb_turmas, qntd) VALUES ('$iddis','$id','$qntd')";
				$result4 = mysqli_query($conn,$sql4);
			}
	     	$numero = $numero+1;
		}
header('location:../turmas.php');
?>