<!DOCTYPE html>
<html>
<head>
	<?php
		require 'PHP/import.php';
		if (isset($_GET['error'])) {
			$error = $_GET['error'];		
		}
	?>
</head>
	<body>
		<div id="incorreto">
			<?php
				if (isset($error)) {
					if ($error = '1'){
						echo "Usuário e/ou senha incorreto(os)!";
					}
				}

			?>
		</div>
	<div class="col-sm-10 offset-sm-1 col-md-4 offset-md-4 text-center" id="backgroundlogin">
		<img src="imagens/logo.png" id="tmnhimg"> 
		<hr class="bg-white">
		<form action="PHP/logar.php" method="POST">
			<input type="text" class="mt-5 form-control" id="inputinicial" name="login" placeholder="Usuário...">
			<input type="password" class="mt-5 form-control" id="inputinicial" name="senha" placeholder="Senha...">
			<input type="submit" class="mt-5 form-control" id="botaoentrar" value="Entrar">
		</form>
	</div>
</body>
</html>