<!DOCTYPE html>
<html>
<head>
  <?php
    require 'PHP/import.php';
    require 'PHP/verificarlogin.php';
  ?>
</head>
<body>
  <div id="barra">
    <ul class="pad0">
      <li id="menulogo"><img src="imagens/logobranca.png" id="imgmenu"></li>
      <li id="menu1" class="menu"><a href="disciplinas.php">Gerir Disciplinas</a></li>
      <li id="menu2" class="menu"><a href="professores.php">Gerir Professores</a></li>
      <li id="menu3" class="menu"><a href="turmas.php">Gerir Turmas</a></li>
      <li id="menu4" class="menu"><a href="organizar.php">Organizar Horário</a></li>
      <li class="pt-1 pb-1" id="menu5"><p class="text-center pt-1 h4 montserrat">Seja Bem Vindo(a) <?php echo $_SESSION['nome']; ?></p></li>
    </ul>
  </div>
</body>
</html>