<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<?php
	require "php/conexao.php";
	require "php/import.php";
	require "menuu.php";
?>
</head>
<body>
 <div class="padleft30vh">
		<div class="blocobranco_organizar">
			<p id="demo"></p>
			<p class="titulo ">Segunda-Feira</p>
			<hr>
			<table class="table tabledohorario">
				<tr>
					<td>HORÁRIO</td>
					<?php
						$sql = "SELECT * from tb_turmas";
						$result = mysqli_query($conn,$sql);
						$numerodelinha = mysqli_num_rows($result);
						$qntdd = $numerodelinha;
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<script>";
							echo "a".$row['idtb_turmas']." = [];";
							echo "</script>";
						    echo"<td>" .$row["tur_nome"]."</td>";
						    
						}
					?>
				</tr>
				<?php
					for ($i=0; $i <45 ; $i++) { 
						$j =$i+1;
						if ($j==1){
							$aula= "primeira";
						}elseif($j==2){
							$aula= "segunda";
						}elseif($j==3){
							$aula= "terceira";
						}elseif($j==4){
							$aula= "quarta";
						}elseif($j==5){
							$aula= "quinta";
						}elseif($j==6){
							$aula= "sexta";
						}elseif($j==7){
							$aula= "setima";
						}elseif($j==8){
							$aula= "oitava";
						}elseif($j==9){
							$aula= "nona";
						}elseif($j==10){
							$aula= "tprimeira";
						}elseif($j==11){
							$aula= "tsegunda";
						}elseif($j==12){
							$aula= "tterceira";
						}elseif($j==13){
							$aula= "tquarta";
						}elseif($j==14){
							$aula= "tquinta";
						}elseif($j==15){
							$aula= "tsexta";
						}elseif($j==16){
							$aula= "tsetima";
						}elseif($j==17){
							$aula= "toitava";
						}elseif($j==18){
							$aula= "tnona";
						}elseif($j==19){
							$aula= "qprimeira";
						}elseif($j==20){
							$aula= "qsegunda";
						}elseif($j==21){
							$aula= "qterceira";
						}elseif($j==22){
							$aula= "qquarta";
						}elseif($j==23){
							$aula= "qquinta";
						}elseif($j==24){
							$aula= "qsexta";
						}elseif($j==25){
							$aula= "qsetima";
						}elseif($j==26){
							$aula= "qoitava";
						}elseif($j==27){
							$aula= "qnona";
						}elseif($j==28){
							$aula= "qiprimeira";
						}elseif($j==29){
							$aula= "qisegunda";
						}elseif($j==30){
							$aula= "qiterceira";
						}elseif($j==31){
							$aula= "qiquarta";
						}elseif($j==32){
							$aula= "qiquinta";
						}elseif($j==33){
							$aula= "qisexta";
						}elseif($j==34){
							$aula= "qisetima";
						}elseif($j==35){
							$aula= "qioitava";
						}elseif($j==36){
							$aula= "qinona";
						}elseif($j==37){
							$aula= "sprimeira";
						}elseif($j==38){
							$aula= "ssegunda";
						}elseif($j==39){
							$aula= "sterceira";
						}elseif($j==40){
							$aula= "squarta";
						}elseif($j==41){
							$aula= "squinta";
						}elseif($j==42){
							$aula= "ssexta";
						}elseif($j==43){
							$aula= "ssetima";
						}elseif($j==44){
							$aula= "soitava";
						}else{
							$aula= "snona";
						}
						

						if ($j==10) {
							echo "<td class='py-5'>";
							echo "</td'>";
							echo "<td class='centrar'>";
							echo "Terça-Feira";
							echo "</td>";	

							$sqlx = "SELECT * from tb_turmas";
							$resultx = mysqli_query($conn,$sqlx);
							$numerodelinha = mysqli_num_rows($resultx);

							echo "<tr>";	
							echo "<td>";	
							echo "</td>";	
							while ($rowx = mysqli_fetch_assoc($resultx)) {
							    echo"<td>" .$rowx["tur_nome"]."</td>";
							    
							}
							echo "</tr>";	
					
						}

						if ($j==19) {
							echo "<td class='py-5'>";
							echo "</td'>";
							echo "<td class='centrar'>";
							echo "Quarta-Feira";
							echo "</td>";

							$sqlx = "SELECT * from tb_turmas";
							$resultx = mysqli_query($conn,$sqlx);
							$numerodelinha = mysqli_num_rows($resultx);

							echo "<tr>";	
							echo "<td>";	
							echo "</td>";	
							while ($rowx = mysqli_fetch_assoc($resultx)) {
							    echo"<td>" .$rowx["tur_nome"]."</td>";
							    
							}
							echo "</tr>";	
						}

						if ($j==28) {
							echo "<td class='py-5'>";
							echo "</td'>";
							echo "<td class='centrar'>";
							echo "Quinta-Feira";
							echo "</td>";	

							$sqlx = "SELECT * from tb_turmas";
							$resultx = mysqli_query($conn,$sqlx);
							$numerodelinha = mysqli_num_rows($resultx);

							echo "<tr>";	
							echo "<td>";	
							echo "</td>";	
							while ($rowx = mysqli_fetch_assoc($resultx)) {
							    echo"<td>" .$rowx["tur_nome"]."</td>";
							    
							}
							echo "</tr>";
						}

						if ($j==37) {
							echo "<td class='py-5'>";
							echo "</td'>";
							echo "<td class='centrar'>";
							echo "Sexta-Feira";
							echo "</td>";	

							$sqlx = "SELECT * from tb_turmas";
							$resultx = mysqli_query($conn,$sqlx);
							$numerodelinha = mysqli_num_rows($resultx);

							echo "<tr>";	
							echo "<td>";	
							echo "</td>";	
							while ($rowx = mysqli_fetch_assoc($resultx)) {
							    echo"<td>" .$rowx["tur_nome"]."</td>";
							    
							}
							echo "</tr>";
						}

						echo "<tr id='".$aula."'>";
						echo "<td>";
						if ($j>9 && $j<19) {
							$tj = $j-9;
							echo $tj."° Aula";
						}elseif ($j>18 && $j<28) {
							$qj = $j-18;
							echo $qj."° Aula";
						}elseif ($j>27 && $j<37) {
							$qij = $j-27;
							echo $qij."° Aula";
						}elseif ($j>36 && $j<46) {
							$sj = $j-36;
							echo $sj."° Aula";
						}else{
						echo $j."° Aula";
						}
						echo "</td>";
						qntddeturmas();
						echo "</tr>";
					}

				?>
			</table>
			<button onclick="gravar()">Gravar</button>
			<button type="button"  onclick="document.location.href='recuperar.php'">Recuperar</button>
		</div>
	</div>
</body>
</html>
<?php 

	function disc() {   
		require "php/conexao.php";
		$sql3 = "SELECT * FROM tb_disciplinas";
		$query3 = mysqli_query($conn, $sql3);
		echo "<td>";
		echo "<select class='form-control selecaoo' onchange='ocl()'>";
		echo "<option>";
		echo "Selecionar...";
		echo "</option>";
		while ($row3 = mysqli_fetch_assoc($query3)) {
		echo "<div id = '".$row3['iddisciplinas']."'>";
			echo "<option id='".$row3['iddisciplinas']."'>";
				echo $row3['dis_nome'];
			echo "</option>";
		echo "</div>";
	   }           
		echo "</select>";
		echo "</td>";
	}



	function qntddeturmas(){
		require "php/conexao.php";
		$sql4 = "SELECT * from tb_turmas";
		$result4 = mysqli_query($conn,$sql4);
		$numerodelinha = mysqli_num_rows($result4);
		for ($i=0; $i <$numerodelinha ; $i++) { 
			disc();
		}
	}


?>     
<script type="text/javascript">
	function hasDuplicates(array) {
    return (new Set(array)).size !== array.length;
}
	var primeira = document.getElementById('primeira');
	var segunda = document.getElementById('segunda');
	var terceira = document.getElementById('terceira');
	var quarta = document.getElementById('quarta');
	var quinta = document.getElementById('quinta');
	var sexta = document.getElementById('sexta');
	var setima = document.getElementById('setima');
	var oitava = document.getElementById('oitava');
	var nona = document.getElementById('nona');
	
	var tprimeira = document.getElementById('tprimeira');
	var tsegunda = document.getElementById('tsegunda');
	var tterceira = document.getElementById('tterceira');
	var tquarta = document.getElementById('tquarta');
	var tquinta = document.getElementById('tquinta');
	var tsexta = document.getElementById('tsexta');
	var tsetima = document.getElementById('tsetima');
	var toitava = document.getElementById('toitava');
	var tnona = document.getElementById('tnona');
	
	var qprimeira = document.getElementById('qprimeira');
	var qsegunda = document.getElementById('qsegunda');
	var qterceira = document.getElementById('qterceira');
	var qquarta = document.getElementById('qquarta');
	var qquinta = document.getElementById('qquinta');
	var qsexta = document.getElementById('qsexta');
	var qsetima = document.getElementById('qsetima');
	var qoitava = document.getElementById('qoitava');
	var qnona = document.getElementById('qnona');
	
	var qiprimeira = document.getElementById('qiprimeira');
	var qisegunda = document.getElementById('qisegunda');
	var qiterceira = document.getElementById('qiterceira');
	var qiquarta = document.getElementById('qiquarta');
	var qiquinta = document.getElementById('qiquinta');
	var qisexta = document.getElementById('qisexta');
	var qisetima = document.getElementById('qisetima');
	var qioitava = document.getElementById('qioitava');
	var qinona = document.getElementById('qinona');
	
	var sprimeira = document.getElementById('sprimeira');
	var ssegunda = document.getElementById('ssegunda');
	var sterceira = document.getElementById('sterceira');
	var squarta = document.getElementById('squarta');
	var squinta = document.getElementById('squinta');
	var ssexta = document.getElementById('ssexta');
	var ssetima = document.getElementById('ssetima');
	var soitava = document.getElementById('soitava');
	var snona = document.getElementById('snona');
	


		
	pri = [];
	prim = [];
	seg = [];
	segm = [];
	ter = [];
	term = [];
	qua = [];
	quam = [];
	qui = [];
	quim = [];
	sex = [];
	sexm = [];
	set = [];
	setm = [];
	oit = [];
	oitm = [];
	non = [];
	nonm = [];

	tpri = [];
	tprim = [];
	tseg = [];
	tsegm = [];
	tter = [];
	tterm = [];
	tqua = [];
	tquam = [];
	tqui = [];
	tquim = [];
	tsex = [];
	tsexm = [];
	tset = [];
	tsetm = [];
	toit = [];
	toitm = [];
	tnon = [];
	tnonm = [];

	qpri = [];
	qprim = [];
	qseg = [];
	qsegm = [];
	qter = [];
	qterm = [];
	qqua = [];
	qquam = [];
	qqui = [];
	qquim = [];
	qsex = [];
	qsexm = [];
	qset = [];
	qsetm = [];
	qoit = [];
	qoitm = [];
	qnon = [];
	qnonm = [];

	qipri = [];
	qiprim = [];
	qiseg = [];
	qisegm = [];
	qiter = [];
	qiterm = [];
	qiqua = [];
	qiquam = [];
	qiqui = [];
	qiquim = [];
	qisex = [];
	qisexm = [];
	qiset = [];
	qisetm = [];
	qioit = [];
	qioitm = [];
	qinon = [];
	qinonm = [];

	spri = [];
	sprim = [];
	sseg = [];
	ssegm = [];
	ster = [];
	sterm = [];
	squa = [];
	squam = [];
	squi = [];
	squim = [];
	ssex = [];
	ssexm = [];
	sset = [];
	ssetm = [];
	soit = [];
	soitm = [];
	snon = [];
	snonm = [];



			var totali = 0;
	function ocl(){

		var cont = 0;
		var cont2 = 0;
		var cont3 = 0;
		var cont4 = 0;
		var cont5 = 0;
		var cont6 = 0;
		var cont7 = 0;
		var cont8 = 0;
		var cont9 = 0;

		var tcont = 0;
		var tcont2 = 0;
		var tcont3 = 0;
		var tcont4 = 0;
		var tcont5 = 0;
		var tcont6 = 0;
		var tcont7 = 0;
		var tcont8 = 0;
		var tcont9 = 0;

		var qcont = 0;
		var qcont2 = 0;
		var qcont3 = 0;
		var qcont4 = 0;
		var qcont5 = 0;
		var qcont6 = 0;
		var qcont7 = 0;
		var qcont8 = 0;
		var qcont9 = 0;

		var qicont = 0;
		var qicont2 = 0;
		var qicont3 = 0;
		var qicont4 = 0;
		var qicont5 = 0;
		var qicont6 = 0;
		var qicont7 = 0;
		var qicont8 = 0;
		var qicont9 = 0;

		var scont = 0;
		var scont2 = 0;
		var scont3 = 0;
		var scont4 = 0;
		var scont5 = 0;
		var scont6 = 0;
		var scont7 = 0;
		var scont8 = 0;
		var scont9 = 0;

		var qntddd = "<?php echo $qntdd ?>";
		var c = document.getElementsByTagName('select');
		console.log(c.length);
		console.log(qntddd);


		for (var i = 0; i <= c.length - 1; i++) {
			if (c[i].value != undefined && c[i].value != "Selecionar..." ) {
 
	
					 		 
				//aqui em baixo mostra como cheguei a qual tempo essa aula pertence
		 		var numberos = i/qntddd;
				var numberosfinal = Math.trunc(numberos);


		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 0  ) {
 					var adicionar = pri.push(c[i].value);				 				
	 				cont++;
	 				if (cont>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = pri.length-q;
	 						auxx = pri.length-qntddd;
 							if (q==0) {prim[0] = pri[auxx];
	 						}else{
 								prim[q] = pri[aux];
	 						}
	 					}
		 				for (var j = 0; j < prim.length; j++) {
		 					if (hasDuplicates(prim)==true){
		 						primeira.style.background = 'red';
		 					}else{
		 						primeira.style.background = 'white';
		 					}	
		 				}
	 				}		 				
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 1  ) {
		 			var adicionar = seg.push(c[i].value);				 				
	 				cont2++;
	 				if (cont2>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = seg.length-q;
	 						auxx = seg.length-qntddd;
 							if (q==0) {segm[0] = seg[auxx];
	 						}else{
 								segm[q] = seg[aux];
	 						}
	 					}
		 				for (var j = 0; j < segm.length; j++) {
		 					if (hasDuplicates(segm)==true){
		 						segunda.style.background = 'red';
		 					}else{
		 						segunda.style.background = 'white';
		 					}	
		 				}
	 				}		 
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 2  ) {
		 			var adicionar = ter.push(c[i].value);				 				
	 				cont3++;
	 				if (cont3>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = ter.length-q;
	 						auxx = ter.length-qntddd;
 							if (q==0) {term[0] = ter[auxx];
	 						}else{
 								term[q] = ter[aux];
	 						}
	 					}
		 				for (var j = 0; j < term.length; j++) {
		 					if (hasDuplicates(term)==true){
		 						terceira.style.background = 'red';
		 					}else{
		 						terceira.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 3  ) {
		 			var adicionar = qua.push(c[i].value);				 				
	 				cont4++;
	 				if (cont4>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qua.length-q;
	 						auxx = qua.length-qntddd;
 							if (q==0) {quam[0] = qua[auxx];
	 						}else{
 								quam[q] = qua[aux];
	 						}
	 					}
		 				for (var j = 0; j < quam.length; j++) {
		 					if (hasDuplicates(quam)==true){
		 						quarta.style.background = 'red';
		 					}else{
		 						quarta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 4  ) {
		 			var adicionar = qui.push(c[i].value);				 				
	 				cont5++;
	 				if (cont5>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qui.length-q;
	 						auxx = qui.length-qntddd;
 							if (q==0) {quim[0] = qui[auxx];
	 						}else{
 								quim[q] = qui[aux];
	 						}
	 					}
		 				for (var j = 0; j < quim.length; j++) {
		 					if (hasDuplicates(quim)==true){
		 						quinta.style.background = 'red';
		 					}else{
		 						quinta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 5  ) {
		 			var adicionar = sex.push(c[i].value);				 				
	 				cont6++;
	 				if (cont6>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = sex.length-q;
	 						auxx = sex.length-qntddd;
 							if (q==0) {sexm[0] = sex[auxx];
	 						}else{
 								sexm[q] = sex[aux];
	 						}
	 					}
		 				for (var j = 0; j < sexm.length; j++) {
		 					if (hasDuplicates(sexm)==true){
		 						sexta.style.background = 'red';
		 					}else{
		 						sexta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 6  ) {
		 			var adicionar = set.push(c[i].value);				 				
	 				cont7++;
	 				if (cont7>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = set.length-q;
	 						auxx = set.length-qntddd;
 							if (q==0) {setm[0] = set[auxx];
	 						}else{
 								setm[q] = set[aux];
	 						}
	 					}
		 				for (var j = 0; j < setm.length; j++) {
		 					if (hasDuplicates(setm)==true){
		 						setima.style.background = 'red';
		 					}else{
		 						setima.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 7  ) {
		 			var adicionar = oit.push(c[i].value);				 				
	 				cont8++;
	 				if (cont8>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = oit.length-q;
	 						auxx = oit.length-qntddd;
 							if (q==0) {oitm[0] = oit[auxx];
	 						}else{
 								oitm[q] = oit[aux];
	 						}
	 					}
		 				for (var j = 0; j < oitm.length; j++) {
		 					if (hasDuplicates(oitm)==true){
		 						oitava.style.background = 'red';
		 					}else{
		 						oitava.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 8  ) {
		 			var adicionar = non.push(c[i].value);				 				
	 				cont9++;
	 				if (cont9>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = non.length-q;
	 						auxx = non.length-qntddd;
 							if (q==0) {nonm[0] = non[auxx];
	 						}else{
 								nonm[q] = non[aux];
	 						}
	 					}
		 				for (var j = 0; j < nonm.length; j++) {
		 					if (hasDuplicates(nonm)==true){
		 						nona.style.background = 'red';
		 					}else{
		 						nona.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}








		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 9  ) {
 					var adicionar = tpri.push(c[i].value);				 				
	 				tcont++;
	 				if (tcont>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tpri.length-q;
	 						auxx = tpri.length-qntddd;
 							if (q==0) {tprim[0] = tpri[auxx];
	 						}else{
 								tprim[q] = tpri[aux];
	 						}
	 					}
		 				for (var j = 0; j < tprim.length; j++) {
		 					if (hasDuplicates(tprim)==true){
		 						tprimeira.style.background = 'red';
		 					}else{
		 						tprimeira.style.background = 'white';
		 					}	
		 				}
	 				}		 				
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 10  ) {
		 			var adicionar = tseg.push(c[i].value);				 				
	 				tcont2++;
	 				if (tcont2>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tseg.length-q;
	 						auxx = tseg.length-qntddd;
 							if (q==0) {tsegm[0] = tseg[auxx];
	 						}else{
 								tsegm[q] = tseg[aux];
	 						}
	 					}
		 				for (var j = 0; j < tsegm.length; j++) {
		 					if (hasDuplicates(tsegm)==true){
		 						tsegunda.style.background = 'red';
		 					}else{
		 						tsegunda.style.background = 'white';
		 					}	
		 				}
	 				}		 
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 11  ) {
		 			var adicionar = tter.push(c[i].value);				 				
	 				tcont3++;
	 				if (tcont3>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tter.length-q;
	 						auxx = tter.length-qntddd;
 							if (q==0) {tterm[0] = tter[auxx];
	 						}else{
 								tterm[q] = tter[aux];
	 						}
	 					}
		 				for (var j = 0; j < tterm.length; j++) {
		 					if (hasDuplicates(tterm)==true){
		 						tterceira.style.background = 'red';
		 					}else{
		 						tterceira.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 12  ) {
		 			var adicionar = tqua.push(c[i].value);				 				
	 				tcont4++;
	 				if (tcont4>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tqua.length-q;
	 						auxx = tqua.length-qntddd;
 							if (q==0) {tquam[0] = tqua[auxx];
	 						}else{
 								tquam[q] = tqua[aux];
	 						}
	 					}
		 				for (var j = 0; j < tquam.length; j++) {
		 					if (hasDuplicates(tquam)==true){
		 						tquarta.style.background = 'red';
		 					}else{
		 						tquarta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 13  ) {
		 			var adicionar = tqui.push(c[i].value);				 				
	 				tcont5++;
	 				if (tcont5>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tqui.length-q;
	 						auxx = tqui.length-qntddd;
 							if (q==0) {tquim[0] = tqui[auxx];
	 						}else{
 								tquim[q] = tqui[aux];
	 						}
	 					}
		 				for (var j = 0; j < tquim.length; j++) {
		 					if (hasDuplicates(tquim)==true){
		 						tquinta.style.background = 'red';
		 					}else{
		 						tquinta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 14  ) {
		 			var adicionar = tsex.push(c[i].value);				 				
	 				tcont6++;
	 				if (tcont6>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tsex.length-q;
	 						auxx = tsex.length-qntddd;
 							if (q==0) {tsexm[0] = tsex[auxx];
	 						}else{
 								tsexm[q] = tsex[aux];
	 						}
	 					}
		 				for (var j = 0; j < tsexm.length; j++) {
		 					if (hasDuplicates(tsexm)==true){
		 						tsexta.style.background = 'red';
		 					}else{
		 						tsexta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 15  ) {
		 			var adicionar = tset.push(c[i].value);				 				
	 				tcont7++;
	 				if (tcont7>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tset.length-q;
	 						auxx = tset.length-qntddd;
 							if (q==0) {tsetm[0] = tset[auxx];
	 						}else{
 								tsetm[q] = tset[aux];
	 						}
	 					}
		 				for (var j = 0; j < tsetm.length; j++) {
		 					if (hasDuplicates(tsetm)==true){
		 						tsetima.style.background = 'red';
		 					}else{
		 						tsetima.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 16  ) {
		 			var adicionar = toit.push(c[i].value);				 				
	 				tcont8++;
	 				if (tcont8>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = toit.length-q;
	 						auxx = toit.length-qntddd;
 							if (q==0) {toitm[0] = toit[auxx];
	 						}else{
 								toitm[q] = toit[aux];
	 						}
	 					}
		 				for (var j = 0; j < toitm.length; j++) {
		 					if (hasDuplicates(toitm)==true){
		 						toitava.style.background = 'red';
		 					}else{
		 						toitava.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 17  ) {
		 			var adicionar = tnon.push(c[i].value);				 				
	 				tcont9++;
	 				if (tcont9>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = tnon.length-q;
	 						auxx = tnon.length-qntddd;
 							if (q==0) {tnonm[0] = tnon[auxx];
	 						}else{
 								tnonm[q] = tnon[aux];
	 						}
	 					}
		 				for (var j = 0; j < tnonm.length; j++) {
		 					if (hasDuplicates(tnonm)==true){
		 						tnona.style.background = 'red';
		 					}else{
		 						tnona.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}







		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 18  ) {
 					var adicionar = qpri.push(c[i].value);				 				
	 				qcont++;
	 				if (qcont>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qpri.length-q;
	 						auxx = qpri.length-qntddd;
 							if (q==0) {qprim[0] = qpri[auxx];
	 						}else{
 								qprim[q] = qpri[aux];
	 						}
	 					}
		 				for (var j = 0; j < qprim.length; j++) {
		 					if (hasDuplicates(qprim)==true){
		 						qprimeira.style.background = 'red';
		 					}else{
		 						qprimeira.style.background = 'white';
		 					}	
		 				}
	 				}		 				
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 19  ) {
		 			var adicionar = qseg.push(c[i].value);				 				
	 				qcont2++;
	 				if (qcont2>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qseg.length-q;
	 						auxx = qseg.length-qntddd;
 							if (q==0) {qsegm[0] = qseg[auxx];
	 						}else{
 								qsegm[q] = qseg[aux];
	 						}
	 					}
		 				for (var j = 0; j < qsegm.length; j++) {
		 					if (hasDuplicates(qsegm)==true){
		 						qsegunda.style.background = 'red';
		 					}else{
		 						qsegunda.style.background = 'white';
		 					}	
		 				}
	 				}		 
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 20  ) {
		 			var adicionar = qter.push(c[i].value);				 				
	 				qcont3++;
	 				if (qcont3>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qter.length-q;
	 						auxx = qter.length-qntddd;
 							if (q==0) {qterm[0] = qter[auxx];
	 						}else{
 								qterm[q] = qter[aux];
	 						}
	 					}
		 				for (var j = 0; j < qterm.length; j++) {
		 					if (hasDuplicates(qterm)==true){
		 						qterceira.style.background = 'red';
		 					}else{
		 						qterceira.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 21  ) {
		 			var adicionar = qqua.push(c[i].value);				 				
	 				qcont4++;
	 				if (qcont4>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qqua.length-q;
	 						auxx = qqua.length-qntddd;
 							if (q==0) {qquam[0] = qqua[auxx];
	 						}else{
 								qquam[q] = qqua[aux];
	 						}
	 					}
		 				for (var j = 0; j < qquam.length; j++) {
		 					if (hasDuplicates(qquam)==true){
		 						qquarta.style.background = 'red';
		 					}else{
		 						qquarta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 22  ) {
		 			var adicionar = qqui.push(c[i].value);				 				
	 				qcont5++;
	 				if (qcont5>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qqui.length-q;
	 						auxx = qqui.length-qntddd;
 							if (q==0) {qquim[0] = qqui[auxx];
	 						}else{
 								qquim[q] = qqui[aux];
	 						}
	 					}
		 				for (var j = 0; j < qquim.length; j++) {
		 					if (hasDuplicates(qquim)==true){
		 						qquinta.style.background = 'red';
		 					}else{
		 						qquinta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 23  ) {
		 			var adicionar = qsex.push(c[i].value);				 				
	 				qcont6++;
	 				if (qcont6>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qsex.length-q;
	 						auxx = qsex.length-qntddd;
 							if (q==0) {qsexm[0] = qsex[auxx];
	 						}else{
 								qsexm[q] = qsex[aux];
	 						}
	 					}
		 				for (var j = 0; j < qsexm.length; j++) {
		 					if (hasDuplicates(qsexm)==true){
		 						qsexta.style.background = 'red';
		 					}else{
		 						qsexta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 24  ) {
		 			var adicionar = qset.push(c[i].value);				 				
	 				qcont7++;
	 				if (qcont7>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qset.length-q;
	 						auxx = qset.length-qntddd;
 							if (q==0) {qsetm[0] = qset[auxx];
	 						}else{
 								qsetm[q] = qset[aux];
	 						}
	 					}
		 				for (var j = 0; j < qsetm.length; j++) {
		 					if (hasDuplicates(qsetm)==true){
		 						qsetima.style.background = 'red';
		 					}else{
		 						qsetima.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 25  ) {
		 			var adicionar = qoit.push(c[i].value);				 				
	 				qcont8++;
	 				if (qcont8>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qoit.length-q;
	 						auxx = qoit.length-qntddd;
 							if (q==0) {qoitm[0] = qoit[auxx];
	 						}else{
 								qoitm[q] = qoit[aux];
	 						}
	 					}
		 				for (var j = 0; j < qoitm.length; j++) {
		 					if (hasDuplicates(qoitm)==true){
		 						qoitava.style.background = 'red';
		 					}else{
		 						qoitava.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 26  ) {
		 			var adicionar = qnon.push(c[i].value);				 				
	 				qcont9++;
	 				if (qcont9>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qnon.length-q;
	 						auxx = qnon.length-qntddd;
 							if (q==0) {qnonm[0] = qnon[auxx];
	 						}else{
 								qnonm[q] = qnon[aux];
	 						}
	 					}
		 				for (var j = 0; j < qnonm.length; j++) {
		 					if (hasDuplicates(qnonm)==true){
		 						qnona.style.background = 'red';
		 					}else{
		 						qnona.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}





		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 27  ) {
 					var adicionar = qipri.push(c[i].value);				 				
	 				qicont++;
	 				if (qicont>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qipri.length-q;
	 						auxx = qipri.length-qntddd;
 							if (q==0) {qiprim[0] = qipri[auxx];
	 						}else{
 								qiprim[q] = qipri[aux];
	 						}
	 					}
		 				for (var j = 0; j < qiprim.length; j++) {
		 					if (hasDuplicates(qiprim)==true){
		 						qiprimeira.style.background = 'red';
		 					}else{
		 						qiprimeira.style.background = 'white';
		 					}	
		 				}
	 				}		 				
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 28  ) {
		 			var adicionar = qiseg.push(c[i].value);				 				
	 				qicont2++;
	 				if (qicont2>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qiseg.length-q;
	 						auxx = qiseg.length-qntddd;
 							if (q==0) {qisegm[0] = qiseg[auxx];
	 						}else{
 								qisegm[q] = qiseg[aux];
	 						}
	 					}
		 				for (var j = 0; j < qisegm.length; j++) {
		 					if (hasDuplicates(qisegm)==true){
		 						qisegunda.style.background = 'red';
		 					}else{
		 						qisegunda.style.background = 'white';
		 					}	
		 				}
	 				}		 
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 29  ) {
		 			var adicionar = qiter.push(c[i].value);				 				
	 				qicont3++;
	 				if (qicont3>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qiter.length-q;
	 						auxx = qiter.length-qntddd;
 							if (q==0) {qiterm[0] = qiter[auxx];
	 						}else{
 								qiterm[q] = qiter[aux];
	 						}
	 					}
		 				for (var j = 0; j < qiterm.length; j++) {
		 					if (hasDuplicates(qiterm)==true){
		 						qiterceira.style.background = 'red';
		 					}else{
		 						qiterceira.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 30  ) {
		 			var adicionar = qiqua.push(c[i].value);				 				
	 				qicont4++;
	 				if (qicont4>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qiqua.length-q;
	 						auxx = qiqua.length-qntddd;
 							if (q==0) {qiquam[0] = qiqua[auxx];
	 						}else{
 								qiquam[q] = qiqua[aux];
	 						}
	 					}
		 				for (var j = 0; j < qiquam.length; j++) {
		 					if (hasDuplicates(qiquam)==true){
		 						qiquarta.style.background = 'red';
		 					}else{
		 						qiquarta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 31  ) {
		 			var adicionar = qiqui.push(c[i].value);				 				
	 				qicont5++;
	 				if (qicont5>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qiqui.length-q;
	 						auxx = qiqui.length-qntddd;
 							if (q==0) {qiquim[0] = qiqui[auxx];
	 						}else{
 								qiquim[q] = qiqui[aux];
	 						}
	 					}
		 				for (var j = 0; j < qiquim.length; j++) {
		 					if (hasDuplicates(qiquim)==true){
		 						qiquinta.style.background = 'red';
		 					}else{
		 						qiquinta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 32  ) {
		 			var adicionar = qisex.push(c[i].value);				 				
	 				qicont6++;
	 				if (qicont6>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qisex.length-q;
	 						auxx = qisex.length-qntddd;
 							if (q==0) {qisexm[0] = qisex[auxx];
	 						}else{
 								qisexm[q] = qisex[aux];
	 						}
	 					}
		 				for (var j = 0; j < qisexm.length; j++) {
		 					if (hasDuplicates(qisexm)==true){
		 						qisexta.style.background = 'red';
		 					}else{
		 						qisexta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 33  ) {
		 			var adicionar = qiset.push(c[i].value);				 				
	 				qicont7++;
	 				if (qicont7>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qiset.length-q;
	 						auxx = qiset.length-qntddd;
 							if (q==0) {qisetm[0] = qiset[auxx];
	 						}else{
 								qisetm[q] = qiset[aux];
	 						}
	 					}
		 				for (var j = 0; j < qisetm.length; j++) {
		 					if (hasDuplicates(qisetm)==true){
		 						qisetima.style.background = 'red';
		 					}else{
		 						qisetima.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 34  ) {
		 			var adicionar = qioit.push(c[i].value);				 				
	 				qicont8++;
	 				if (qicont8>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qioit.length-q;
	 						auxx = qioit.length-qntddd;
 							if (q==0) {qioitm[0] = qioit[auxx];
	 						}else{
 								qioitm[q] = qioit[aux];
	 						}
	 					}
		 				for (var j = 0; j < qioitm.length; j++) {
		 					if (hasDuplicates(qioitm)==true){
		 						qioitava.style.background = 'red';
		 					}else{
		 						qioitava.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 35  ) {
		 			var adicionar = qinon.push(c[i].value);				 				
	 				qicont9++;
	 				if (qicont9>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = qinon.length-q;
	 						auxx = qinon.length-qntddd;
 							if (q==0) {qinonm[0] = qinon[auxx];
	 						}else{
 								qinonm[q] = qinon[aux];
	 						}
	 					}
		 				for (var j = 0; j < qinonm.length; j++) {
		 					if (hasDuplicates(qinonm)==true){
		 						qinona.style.background = 'red';
		 					}else{
		 						qinona.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}



		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 36  ) {
 					var adicionar = spri.push(c[i].value);				 				
	 				scont++;
	 				if (scont>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = spri.length-q;
	 						auxx = spri.length-qntddd;
 							if (q==0) {sprim[0] = spri[auxx];
	 						}else{
 								sprim[q] = spri[aux];
	 						}
	 					}
		 				for (var j = 0; j < sprim.length; j++) {
		 					if (hasDuplicates(sprim)==true){
		 						sprimeira.style.background = 'red';
		 					}else{
		 						sprimeira.style.background = 'white';
		 					}	
		 				}
	 				}		 				
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 37  ) {
		 			var adicionar = sseg.push(c[i].value);				 				
	 				scont2++;
	 				if (scont2>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = sseg.length-q;
	 						auxx = sseg.length-qntddd;
 							if (q==0) {ssegm[0] = sseg[auxx];
	 						}else{
 								ssegm[q] = sseg[aux];
	 						}
	 					}
		 				for (var j = 0; j < ssegm.length; j++) {
		 					if (hasDuplicates(ssegm)==true){
		 						ssegunda.style.background = 'red';
		 					}else{
		 						ssegunda.style.background = 'white';
		 					}	
		 				}
	 				}		 
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 38  ) {
		 			var adicionar = ster.push(c[i].value);				 				
	 				scont3++;
	 				if (scont3>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = ster.length-q;
	 						auxx = ster.length-qntddd;
 							if (q==0) {sterm[0] = ster[auxx];
	 						}else{
 								sterm[q] = ster[aux];
	 						}
	 					}
		 				for (var j = 0; j < sterm.length; j++) {
		 					if (hasDuplicates(sterm)==true){
		 						sterceira.style.background = 'red';
		 					}else{
		 						sterceira.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 39  ) {
		 			var adicionar = squa.push(c[i].value);				 				
	 				scont4++;
	 				if (scont4>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = squa.length-q;
	 						auxx = squa.length-qntddd;
 							if (q==0) {squam[0] = squa[auxx];
	 						}else{
 								squam[q] = squa[aux];
	 						}
	 					}
		 				for (var j = 0; j < squam.length; j++) {
		 					if (hasDuplicates(squam)==true){
		 						squarta.style.background = 'red';
		 					}else{
		 						squarta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 40  ) {
		 			var adicionar = squi.push(c[i].value);				 				
	 				scont5++;
	 				if (scont5>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = squi.length-q;
	 						auxx = squi.length-qntddd;
 							if (q==0) {squim[0] = squi[auxx];
	 						}else{
 								squim[q] = squi[aux];
	 						}
	 					}
		 				for (var j = 0; j < squim.length; j++) {
		 					if (hasDuplicates(squim)==true){
		 						squinta.style.background = 'red';
		 					}else{
		 						squinta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 41  ) {
		 			var adicionar = ssex.push(c[i].value);				 				
	 				scont6++;
	 				if (scont6>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = ssex.length-q;
	 						auxx = ssex.length-qntddd;
 							if (q==0) {ssexm[0] = ssex[auxx];
	 						}else{
 								ssexm[q] = ssex[aux];
	 						}
	 					}
		 				for (var j = 0; j < ssexm.length; j++) {
		 					if (hasDuplicates(ssexm)==true){
		 						ssexta.style.background = 'red';
		 					}else{
		 						ssexta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 42  ) {
		 			var adicionar = sset.push(c[i].value);				 				
	 				scont7++;
	 				if (scont7>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = sset.length-q;
	 						auxx = sset.length-qntddd;
 							if (q==0) {ssetm[0] = sset[auxx];
	 						}else{
 								ssetm[q] = sset[aux];
	 						}
	 					}
		 				for (var j = 0; j < ssetm.length; j++) {
		 					if (hasDuplicates(ssetm)==true){
		 						ssetima.style.background = 'red';
		 					}else{
		 						ssetima.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 43  ) {
		 			var adicionar = soit.push(c[i].value);				 				
	 				scont8++;
	 				if (scont8>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = soit.length-q;
	 						auxx = soit.length-qntddd;
 							if (q==0) {soitm[0] = soit[auxx];
	 						}else{
 								soitm[q] = soit[aux];
	 						}
	 					}
		 				for (var j = 0; j < soitm.length; j++) {
		 					if (hasDuplicates(soitm)==true){
		 						soitava.style.background = 'red';
		 					}else{
		 						soitava.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 44  ) {
		 			var adicionar = snon.push(c[i].value);				 				
	 				scont9++;
	 				if (scont9>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = snon.length-q;
	 						auxx = snon.length-qntddd;
 							if (q==0) {snonm[0] = snon[auxx];
	 						}else{
 								snonm[q] = snon[aux];
	 						}
	 					}
		 				for (var j = 0; j < snonm.length; j++) {
		 					if (hasDuplicates(snonm)==true){
		 						snona.style.background = 'red';
		 					}else{
		 						snona.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}








		 		<?php	
		$sqlf = "SELECT * from tb_turmas";
		$resultf = mysqli_query($conn,$sqlf);
		$numerodelinhaf = mysqli_num_rows($resultf);
		$qntddf = $numerodelinhaf;
		$variphp = 0;				
		while ($rowf = mysqli_fetch_assoc($resultf)) {
			?>
				var varijs = <?php echo $variphp ?> ; 


					<?php echo "a".$rowf['idtb_turmas']?>[0] = prim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[1] = segm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[2] = term[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[3] = quam[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[4] = quim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[5] = sexm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[6] = setm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[7] = oitm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[8] = nonm[varijs];

					<?php echo "a".$rowf['idtb_turmas']?>[9] = tprim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[10] = tsegm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[11] = tterm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[12] = tquam[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[13] = tquim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[14] = tsexm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[15] = tsetm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[16] = toitm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[17] = tnonm[varijs];

					<?php echo "a".$rowf['idtb_turmas']?>[18] = qprim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[19] = qsegm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[20] = qterm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[21] = qquam[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[22] = qquim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[23] = qsexm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[24] = qsetm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[25] = qoitm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[26] = qnonm[varijs];

					<?php echo "a".$rowf['idtb_turmas']?>[27] = qiprim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[28] = qisegm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[29] = qiterm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[30] = qiquam[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[31] = qiquim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[32] = qisexm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[33] = qisetm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[34] = qioitm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[35] = qinonm[varijs];

					<?php echo "a".$rowf['idtb_turmas']?>[36] = sprim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[37] = ssegm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[38] = sterm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[39] = squam[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[40] = squim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[41] = ssexm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[42] = ssetm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[43] = soitm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[44] = snonm[varijs];

				

		<?php
		$variphp++;
		}	
		?>

			}
		}

	}


</script>
<script>	
function gravar(){
	// console.log("teste");
 		<?php	
		$sqlf = "SELECT * from tb_turmas";
		$resultf = mysqli_query($conn,$sqlf);
		$numerodelinhaf = mysqli_num_rows($resultf);
		$qntddf = $numerodelinhaf;
		while ($rowf = mysqli_fetch_assoc($resultf)) {
			?>
			
				
			seg(<?php echo $rowf['idtb_turmas']?>, <?php echo "a".$rowf['idtb_turmas']?>[0],<?php echo "a".$rowf['idtb_turmas']?>[1], <?php echo "a".$rowf['idtb_turmas']?>[2], <?php echo "a".$rowf['idtb_turmas']?>[3], <?php echo "a".$rowf['idtb_turmas']?>[4], <?php echo "a".$rowf['idtb_turmas']?>[5], <?php echo "a".$rowf['idtb_turmas']?>[6], <?php echo "a".$rowf['idtb_turmas']?>[7], <?php echo "a".$rowf['idtb_turmas']?>[8]);

			ter(<?php echo $rowf['idtb_turmas']?>, <?php echo "a".$rowf['idtb_turmas']?>[9],<?php echo "a".$rowf['idtb_turmas']?>[10], <?php echo "a".$rowf['idtb_turmas']?>[11], <?php echo "a".$rowf['idtb_turmas']?>[12], <?php echo "a".$rowf['idtb_turmas']?>[13], <?php echo "a".$rowf['idtb_turmas']?>[14], <?php echo "a".$rowf['idtb_turmas']?>[15], <?php echo "a".$rowf['idtb_turmas']?>[16], <?php echo "a".$rowf['idtb_turmas']?>[17]);

			qua(<?php echo $rowf['idtb_turmas']?>, <?php echo "a".$rowf['idtb_turmas']?>[18],<?php echo "a".$rowf['idtb_turmas']?>[19], <?php echo "a".$rowf['idtb_turmas']?>[20], <?php echo "a".$rowf['idtb_turmas']?>[21], <?php echo "a".$rowf['idtb_turmas']?>[22], <?php echo "a".$rowf['idtb_turmas']?>[23], <?php echo "a".$rowf['idtb_turmas']?>[24], <?php echo "a".$rowf['idtb_turmas']?>[25], <?php echo "a".$rowf['idtb_turmas']?>[26]);

			qui(<?php echo $rowf['idtb_turmas']?>, <?php echo "a".$rowf['idtb_turmas']?>[27],<?php echo "a".$rowf['idtb_turmas']?>[28], <?php echo "a".$rowf['idtb_turmas']?>[29], <?php echo "a".$rowf['idtb_turmas']?>[30], <?php echo "a".$rowf['idtb_turmas']?>[31], <?php echo "a".$rowf['idtb_turmas']?>[32], <?php echo "a".$rowf['idtb_turmas']?>[33], <?php echo "a".$rowf['idtb_turmas']?>[34], <?php echo "a".$rowf['idtb_turmas']?>[35]);

			sex(<?php echo $rowf['idtb_turmas']?>, <?php echo "a".$rowf['idtb_turmas']?>[36],<?php echo "a".$rowf['idtb_turmas']?>[37], <?php echo "a".$rowf['idtb_turmas']?>[38], <?php echo "a".$rowf['idtb_turmas']?>[39], <?php echo "a".$rowf['idtb_turmas']?>[40], <?php echo "a".$rowf['idtb_turmas']?>[41], <?php echo "a".$rowf['idtb_turmas']?>[42], <?php echo "a".$rowf['idtb_turmas']?>[43], <?php echo "a".$rowf['idtb_turmas']?>[44]);	

							
		<?php
		}	
		?>
}

 function seg(turma, aula1, aula2, aula3, aula4, aula5, aula6, aula7, aula8, aula9) {
        
          var dados = new FormData();
         dados.append('turma', turma);
         dados.append('aula1', aula1);
         dados.append('aula2', aula2);
         dados.append('aula3', aula3);
         dados.append('aula4', aula4);
         dados.append('aula5', aula5);
         dados.append('aula6', aula6);
         dados.append('aula7', aula7);
         dados.append('aula8', aula8);
         dados.append('aula9', aula9);
         $.ajax({
         	url: 'php/seg.php',
         	method: 'post',
         	data: dados,
         	processData: false,
          contentType: false
         }).done(function(resposta){
         	console.log(resposta);
         	
         });
         
         }

         function ter(tturma, taula1, taula2, taula3, taula4, taula5, taula6, taula7, taula8, taula9) {
        
          var dados = new FormData();
         dados.append('tturma', tturma);
         dados.append('taula1', taula1);
         dados.append('taula2', taula2);
         dados.append('taula3', taula3);
         dados.append('taula4', taula4);
         dados.append('taula5', taula5);
         dados.append('taula6', taula6);
         dados.append('taula7', taula7);
         dados.append('taula8', taula8);
         dados.append('taula9', taula9);
         $.ajax({
         	url: 'php/ter.php',
         	method: 'post',
         	data: dados,
         	processData: false,
          contentType: false
         }).done(function(resposta){
         	console.log(resposta);
         	
         });
         
         }

         function qua(qturma, qaula1, qaula2, qaula3, qaula4, qaula5, qaula6, qaula7, qaula8, qaula9) {
        
          var dados = new FormData();
         dados.append('qturma', qturma);
         dados.append('qaula1', qaula1);
         dados.append('qaula2', qaula2);
         dados.append('qaula3', qaula3);
         dados.append('qaula4', qaula4);
         dados.append('qaula5', qaula5);
         dados.append('qaula6', qaula6);
         dados.append('qaula7', qaula7);
         dados.append('qaula8', qaula8);
         dados.append('qaula9', qaula9);
         $.ajax({
         	url: 'php/qua.php',
         	method: 'post',
         	data: dados,
         	processData: false,
          contentType: false
         }).done(function(resposta){
         	console.log(resposta);
         	
         });
         
         }

         function qui(qiturma, qiaula1, qiaula2, qiaula3, qiaula4, qiaula5, qiaula6, qiaula7, qiaula8, qiaula9) {
        
          var dados = new FormData();
         dados.append('qiturma', qiturma);
         dados.append('qiaula1', qiaula1);
         dados.append('qiaula2', qiaula2);
         dados.append('qiaula3', qiaula3);
         dados.append('qiaula4', qiaula4);
         dados.append('qiaula5', qiaula5);
         dados.append('qiaula6', qiaula6);
         dados.append('qiaula7', qiaula7);
         dados.append('qiaula8', qiaula8);
         dados.append('qiaula9', qiaula9);
         $.ajax({
         	url: 'php/qui.php',
         	method: 'post',
         	data: dados,
         	processData: false,
          contentType: false
         }).done(function(resposta){
         	console.log(resposta);
         	
         });
         
         }

         function sex(sturma, saula1, saula2, saula3, saula4, saula5, saula6, saula7, saula8, saula9) {
        
          var dados = new FormData();
         dados.append('sturma', sturma);
         dados.append('saula1', saula1);
         dados.append('saula2', saula2);
         dados.append('saula3', saula3);
         dados.append('saula4', saula4);
         dados.append('saula5', saula5);
         dados.append('saula6', saula6);
         dados.append('saula7', saula7);
         dados.append('saula8', saula8);
         dados.append('saula9', saula9);
         $.ajax({
         	url: 'php/sex.php',
         	method: 'post',
         	data: dados,
         	processData: false,
          contentType: false
         }).done(function(resposta){
         	console.log(resposta);
         	
         });
         
         }
</script>
<script>
	function recuperar(){
		header('location:recuperar.php');
	}
</script>
