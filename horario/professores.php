<!DOCTYPE html>
<html>
<head>
	<?php
		require "php/conexao.php";
		require "php/import.php";
		require "menu.php";
	?>

</head>
<body>
	<div class="padleft30vh">
		<div class="blocobranco">
			<p class="titulo">Professores</p>
			<hr class="noventa">
			
			<div class="col-md-12 row">
				<div class="col-md-6 bordalateraldireita">
					<p class="titulomenor pb-5">Cadastrar Professores</p>	
					<form method="POST" action="php/inserir_professor.php">
						<input type="text" placeholder="Nome do professor..." name="nome_professor" class="form-control text-center">
						<input type="number" placeholder="Carga horária do professor..." name="ch_professor" class="form-control text-center mt-5">
						<p class="titulomenorainda">Quais disciplinas esse professor leciona?</p>
						<div class="tabelacomscroll">
							<div class="custom-control custom-switch">	
								<?php
									$sql1 = "SELECT * FROM tb_disciplinas";
									$result = mysqli_query($conn, $sql1);
									$numero=1;	
									echo "<table class='table'>";
									while ($row1 = mysqli_fetch_assoc($result)) {

										echo "<tr><td><input type='checkbox' name='$numero' id='$numero' class='custom-control-input	' value='".$row1['iddisciplinas']."'>";
										echo "<label class='custom-control-label' for='$numero'>".$row1['dis_nome']."</label>"."</td><tr>";
											$numero= $numero+1;
									}
									echo "</table>"
								?>
							</div>
						</div>
						<input type="submit" value="Cadastrar"  class="form-control buttoncadastrar mt-5">
					</form>		
				</div>
				<div class="col-md-6">
					<p class="titulomenor">Gerir Professores</p>
					<div class="tabeladisciplinas">
						<table class="table">
							<tr class="trhead">
								<td>Nome</td>
								<td>Disciplinas</td>
								<td>Excluir</td>
							</tr>
							<?php
								$sql = "SELECT * FROM tb_professores";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_assoc($query)) {
									$idprof= $row['idtb_professores']; 
									echo "<tr>";
									echo "<td>";
									echo $row['prof_nome'];
									echo "</td>";
									echo "<td>";

									$sql4 ="SELECT dis_nome from tb_disciplinas Inner Join tb_disciplinas_has_tb_professores on iddisciplinas = tb_disciplinas_iddisciplinas where tb_professores_idtb_professores = $idprof";
									$result4 = mysqli_query($conn,$sql4);
									while ($row4 = mysqli_fetch_assoc($result4)) {
										
										echo $row4['dis_nome'];
										echo "\t  \t";
									}
									echo "</td>";
									echo "<td>";
									echo "<a href='php/apagarprofessor.php?id=".$row['idtb_professores']."'>X</a>";
									echo "</td>";
									echo "</tr>";
								}
								
							?>
							
						</table>			
					</div>
				</div>
			</div>
			

		</div>

      
   



</body>
</html>