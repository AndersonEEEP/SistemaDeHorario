<!DOCTYPE html>
<html>
<head>
	<?php
		require "php/conexao.php"; 
		require "menu.php";
		require "php/import.php";
	?>
</head>
<body>
		<div class="padleft30vh">
		<div class="blocobranco">
			<p class="titulo">Turmas</p>
			<hr class="noventa">
			
			<div class="col-md-12 row">
				<div class="col-md-6 bordalateraldireita">
					<p class="titulomenor pb-5">Cadastrar Turma</p>	
					<form method="POST" action="php/inserir_turma.php">
						<input type="text" placeholder="Nome da Turma..." name="nome_turma" class=" mb-5 form-control text-center">
						<div class="tabelacomscroll">
							<div class="custom-control custom-switch">	
								<?php
									$sql1 = "SELECT * FROM tb_disciplinas";
									$result = mysqli_query($conn, $sql1);
									$numero=1;	
									echo "<table class='table'>";
									while ($row1 = mysqli_fetch_assoc($result)){
										echo "<tr><td><input type='checkbox' name='$numero' id='$numero' class='custom-control-input' value='".$row1['iddisciplinas']."'>";
										echo "<label class='custom-control-label' for='$numero'>".$row1['dis_nome']."\t"."<td><input type='number' class='numerodedisc' name='$numero"."a"."'></td>"."</label>"."</td><tr>";
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
					<p class="titulomenor">Gerir Turma</p>
					<div class="tabeladisciplinas">					
						<table class="table">
							<tr class="trhead">
								<td>Nome</td>
								<td>Disciplinas</td>
								<td>Excluir</td>
							</tr>
							<?php
								$sql = "SELECT * FROM tb_turmas";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_assoc($query)) {
									$idturma= $row['idtb_turmas']; 
									echo "<tr>";
									echo "<td>";
									echo $row['tur_nome'];
									echo "</td>";
									echo "<td>";

									$sql4 ="SELECT dis_nome, qntd from tb_disciplinas Inner Join tb_disciplinas_has_tb_turmas on iddisciplinas = tb_disciplinas_iddisciplinas where tb_turmas_idtb_turmas = $idturma";
									$result4 = mysqli_query($conn,$sql4);
									while ($row4 = mysqli_fetch_assoc($result4)) {
										
										echo $row4['qntd'];
										echo "\t -- \t";
										echo $row4['dis_nome'];
										echo "<br>";
									}
									echo "</td>";
									echo "<td>";
									echo "<a href='php/apagarturma.php?id=".$row['idtb_turmas']."'>X</a>";
									echo "</td>";
									echo "</tr>";
								}
								
							?>
							
						</table>			
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>