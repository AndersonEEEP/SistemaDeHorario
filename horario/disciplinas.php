<!DOCTYPE html>
<html>
<head>
	<?php
		require "php/conexao.php";
		require "php/import.php";
		require "menu.php";
	?>
	<title></title>
</head>
<body>
	<div class="padleft30vh">
		<div class="blocobranco">
			<p class="titulo">Disciplinas</p>
			<hr class="noventa">
			
			<div class="col-md-12 row">
				<div class="col-md-6 bordalateraldireita">
					<p class="titulomenor pb-5">Cadastrar Disciplina</p>	
					<form method="POST" action="php/inserir_disciplina.php">
						<input type="text" placeholder="Nome da disciplina..." name="nome_disciplina" class="form-control text-center">
						<input type="submit" value="Cadastrar"  class="form-control buttoncadastrar mt-5">
					</form>		
				</div>
				<div class="col-md-6">
					<p class="titulomenor">Gerir Disciplinas</p>
					<div class="tabeladisciplinas">					
						<table class="table">
							<tr class="trhead">
								<td>Nome</td>
								<td>Excluir</td>
							</tr>
							<?php
								$sql = "SELECT * FROM tb_disciplinas";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_assoc($query)) {
									echo "<tr>";
									echo "<td>";
									echo $row['dis_nome'];
									echo "</td>";
									echo "<td>";
									echo "<a href='php/apagardisciplina.php?id=".$row['iddisciplinas']."'>X</a>";
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