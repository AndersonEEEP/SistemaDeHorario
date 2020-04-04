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

      <li>
        <div class="alturadasdisc">
            <table class="table text-light">
              <tr class="trhead">
                <td>Nome</td>
                <td>Disciplinas</td>
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
                  echo "</tr>";
                }
                
              ?>
            </table>  
        </div>
      </li>
      <li><p class="text-center h4 pt-3 montserrat">Seja Bem Vindo(a) <?php echo $_SESSION['nome']; ?></p></li>
    </ul>
  </div>
</body>
</html>
