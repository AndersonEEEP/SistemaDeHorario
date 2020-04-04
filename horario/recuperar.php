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
	<script>
    var x = 0;
    $spri = [];
    // console.log($spri);
</script>
<?php
    $y =0;
    require "php/conexao.php";
    $sqln = "SELECT * from tb_turmas";
    $resultn = mysqli_query($conn,$sqln);
    $rown = mysqli_num_rows($resultn);
    

    $zsql = "SELECT * from segunda_feira";
    $presult = mysqli_query($conn,$zsql);            
    $sresult = mysqli_query($conn,$zsql);            
    $tresult = mysqli_query($conn,$zsql);            
    $qresult = mysqli_query($conn,$zsql);            
    $qiresult = mysqli_query($conn,$zsql);            
    $sexresult = mysqli_query($conn,$zsql);            
    $setresult = mysqli_query($conn,$zsql);            
    $oresult = mysqli_query($conn,$zsql);            
    $nresult = mysqli_query($conn,$zsql);   



    
        while ($zrow = mysqli_fetch_assoc($presult)) {
        $y++;
?>
            <script>
                $spri.push("<?php echo $zrow['primeira_aula']; ?>");                  
            </script>   
<?php 
    }
            while ($zrow = mysqli_fetch_assoc($sresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['segunda_aula']; ?>");  
            </script>
<?php
     
    }

            while ($zrow = mysqli_fetch_assoc($tresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['terceira_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quarta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qiresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quinta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($sexresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['sexta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($setresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['setima_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($oresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['oitava_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($nresult)) {
?>
            <script>
                $spri.push("<?php echo $zrow['nona_aula']; ?>");  
            </script>
<?php
     
    }


    $tsql = "SELECT * from terca_feira";
    $presultter = mysqli_query($conn,$tsql);            
    $sresultter = mysqli_query($conn,$tsql);            
    $tresultter = mysqli_query($conn,$tsql);            
    $qresultter = mysqli_query($conn,$tsql);            
    $qiresultter = mysqli_query($conn,$tsql);            
    $sexresultter = mysqli_query($conn,$tsql);            
    $setresultter = mysqli_query($conn,$tsql);            
    $oresultter = mysqli_query($conn,$tsql);            
    $nresultter = mysqli_query($conn,$tsql);         
 


           while ($zrow = mysqli_fetch_assoc($presultter)) {
        $y++;
?>
            <script>
                $spri.push("<?php echo $zrow['primeira_aula']; ?>");                  
            </script>   
<?php 
    }
            while ($zrow = mysqli_fetch_assoc($sresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['segunda_aula']; ?>");  
            </script>
<?php
     
    }

            while ($zrow = mysqli_fetch_assoc($tresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['terceira_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quarta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qiresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quinta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($sexresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['sexta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($setresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['setima_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($oresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['oitava_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($nresultter)) {
?>
            <script>
                $spri.push("<?php echo $zrow['nona_aula']; ?>");  
            </script>
<?php
     
    }
 

  $qsql = "SELECT * from quarta_feira";
    $presultqua = mysqli_query($conn,$qsql);            
    $sresultqua = mysqli_query($conn,$qsql);            
    $tresultqua = mysqli_query($conn,$qsql);            
    $qresultqua = mysqli_query($conn,$qsql);            
    $qiresultqua = mysqli_query($conn,$qsql);            
    $sexresultqua = mysqli_query($conn,$qsql);            
    $setresultqua = mysqli_query($conn,$qsql);            
    $oresultqua = mysqli_query($conn,$qsql);            
    $nresultqua = mysqli_query($conn,$qsql);         
 


           while ($zrow = mysqli_fetch_assoc($presultqua)) {
        $y++;
?>
            <script>
                $spri.push("<?php echo $zrow['primeira_aula']; ?>");                  
            </script>   
<?php 
    }
            while ($zrow = mysqli_fetch_assoc($sresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['segunda_aula']; ?>");  
            </script>
<?php
     
    }

            while ($zrow = mysqli_fetch_assoc($tresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['terceira_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quarta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qiresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quinta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($sexresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['sexta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($setresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['setima_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($oresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['oitava_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($nresultqua)) {
?>
            <script>
                $spri.push("<?php echo $zrow['nona_aula']; ?>");  
            </script>
<?php
     
    }

   

  $quisql = "SELECT * from quinta_feira";
    $presultqui = mysqli_query($conn,$quisql);            
    $sresultqui = mysqli_query($conn,$quisql);            
    $tresultqui = mysqli_query($conn,$quisql);            
    $qresultqui = mysqli_query($conn,$quisql);            
    $qiresultqui = mysqli_query($conn,$quisql);            
    $sexresultqui = mysqli_query($conn,$quisql);            
    $setresultqui = mysqli_query($conn,$quisql);            
    $oresultqui = mysqli_query($conn,$quisql);            
    $nresultqui = mysqli_query($conn,$quisql);         
 


           while ($zrow = mysqli_fetch_assoc($presultqui)) {
        $y++;
?>
            <script>
                $spri.push("<?php echo $zrow['primeira_aula']; ?>");                  
            </script>   
<?php 
    }
            while ($zrow = mysqli_fetch_assoc($sresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['segunda_aula']; ?>");  
            </script>
<?php
     
    }

            while ($zrow = mysqli_fetch_assoc($tresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['terceira_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quarta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qiresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quinta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($sexresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['sexta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($setresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['setima_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($oresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['oitava_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($nresultqui)) {
?>
            <script>
                $spri.push("<?php echo $zrow['nona_aula']; ?>");  
            </script>
<?php
     
    }

      $sexsql = "SELECT * from sexta_feira";
    $presultsex = mysqli_query($conn,$sexsql);            
    $sresultsex = mysqli_query($conn,$sexsql);            
    $tresultsex = mysqli_query($conn,$sexsql);            
    $qresultsex = mysqli_query($conn,$sexsql);            
    $qiresultsex = mysqli_query($conn,$sexsql);            
    $sexresultsex = mysqli_query($conn,$sexsql);            
    $setresultsex = mysqli_query($conn,$sexsql);            
    $oresultsex = mysqli_query($conn,$sexsql);            
    $nresultsex = mysqli_query($conn,$sexsql);         
 


           while ($zrow = mysqli_fetch_assoc($presultsex)) {
        $y++;
?>
            <script>
                $spri.push("<?php echo $zrow['primeira_aula']; ?>");                  
            </script>   
<?php 
    }
            while ($zrow = mysqli_fetch_assoc($sresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['segunda_aula']; ?>");  
            </script>
<?php
     
    }

            while ($zrow = mysqli_fetch_assoc($tresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['terceira_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quarta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($qiresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['quinta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($sexresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['sexta_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($setresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['setima_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($oresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['oitava_aula']; ?>");  
            </script>
<?php
     
    }
                while ($zrow = mysqli_fetch_assoc($nresultsex)) {
?>
            <script>
                $spri.push("<?php echo $zrow['nona_aula']; ?>");  
            </script>
<?php
     
    }
    ?>
 <div class="padleft30vh">
		<div class="blocobranco_organizar">
			<table class="table tabledohorario">
						<h3 class='montserrat h1 afastarm'> Segunda-Feira</h3>
				<?php
						$sql = "SELECT * from tb_turmas";
						$result = mysqli_query($conn,$sql);
						$numerodelinha = mysqli_num_rows($result);
						$qntdd = $numerodelinha;
						echo "<td>";
						echo "</td>";
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<script>";
							echo "a".$row['idtb_turmas']." = [];";
							echo "</script>";
						    echo"<td>" .$row["tur_nome"]."</td>";
						    
						}
					?>
				<?php
					qntddeturmas();
				?>
			</table>
			<button onclick="gravar()">Gravar</button>
			<button type="button"  onclick="document.location.href='recuperar.php'">Recuperar</button>
		</div>
	</div>
</body>
</html>


<?php 
	function qntddeturmas(){

		require "php/conexao.php";
		$sql4 = "SELECT * from tb_turmas";
		$result4 = mysqli_query($conn,$sql4);
		$numerodelinha = mysqli_num_rows($result4); 
		$sql3 = "SELECT * FROM tb_disciplinas";
		$query3 = mysqli_query($conn, $sql3);
?>
	<script>
			var j = 1;
				var numerodeturmas = "<?=$numerodelinha?>";
	        for (var i = 0; i < $spri.length; i++) {

	            var z = i+1;
	            var ja = z/numerodeturmas;
				var intorn = Number.isInteger(ja);
				if (intorn == true){
					j++;
					// console.log(j);
				}
				if (i == 0) {
					var casoespecial = true;
				}
				var imais = i +1;
				var fechaquebra = imais/numerodeturmas;
				var quebrar = i/numerodeturmas;
				var quebrartrueorfalse = Number.isInteger(quebrar);
				var fechatrueorfalse = Number.isInteger(fechaquebra);





					

					if (j==1){
						<?php $aula= "primeira";?>
						if (quebrartrueorfalse == true) {
			     			document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==2){
						<?php $aula= "segunda";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==3){
						<?php $aula= "terceira";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==4){
						<?php $aula= "quarta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==5){
						<?php $aula= "quinta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==6){
						<?php $aula= "sexta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==7){
						<?php $aula= "setima";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==8){
						<?php $aula= "oitava";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==9){
						<?php $aula= "nona";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==10){
						<?php $aula= "tprimeira";?>
						if (quebrartrueorfalse == true) {
							<?php $sqlx = "SELECT * from tb_turmas"; $resultx = mysqli_query($conn,$sqlx); $numerodelinha = mysqli_num_rows($resultx); ?> 	
							document.write("</table>");		
							document.write("<p class='centrar'>Terça-Feira</p>");				
							document.write("<table class='table tabledohorario'>");		
							document.write("<tr>");		
							document.write("<td>");		
							document.write("</td>");		
							<?php while ($rowx = mysqli_fetch_assoc($resultx)) {?>
							    document.write("<td>"+"<?php echo $rowx['tur_nome']?>"+"</td>");    
							<?php } ?>
							document.write("</tr>");		
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}	     					

					}else if(j==11){
						<?php $aula= "tsegunda";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==12){
						<?php $aula= "tterceira";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==13){
						<?php $aula= "tquarta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==14){
						<?php $aula= "tquinta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==15){
						<?php $aula= "tsexta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==16){
						<?php $aula= "tsetima";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==17){
						<?php $aula= "toitava";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==18){
						<?php $aula= "tnona";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}			
					}else if(j==19){
						<?php $aula= "qprimeira";?>
						if (quebrartrueorfalse == true) {
							<?php $sqlx = "SELECT * from tb_turmas"; $resultx = mysqli_query($conn,$sqlx); $numerodelinha = mysqli_num_rows($resultx); ?> 	
							document.write("</table>");		
							document.write("<p class='centrar'>Quarta-Feira</p>");				
							document.write("<table class='table tabledohorario'>");		
							document.write("<tr>");		
							document.write("<td>");		
							document.write("</td>");		
							<?php while ($rowx = mysqli_fetch_assoc($resultx)) {?>
							    document.write("<td>"+"<?php echo $rowx['tur_nome']?>"+"</td>");    
							<?php } ?>
							document.write("</tr>");		
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==20){
						<?php $aula= "qsegunda";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==21){
						<?php $aula= "qterceira";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==22){
						<?php $aula= "qquarta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==23){
						<?php $aula= "qquinta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==24){
						<?php $aula= "qsexta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==25){
						<?php $aula= "qsetima";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==26){
						<?php $aula= "qoitava";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==27){
						<?php $aula= "qnona";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==28){
						<?php $aula= "qiprimeira";?>
						if (quebrartrueorfalse == true) {
							<?php $sqlx = "SELECT * from tb_turmas"; $resultx = mysqli_query($conn,$sqlx); $numerodelinha = mysqli_num_rows($resultx); ?> 	
							document.write("</table>");		
							document.write("<p class='centrar'>Quinta-Feira</p>");				
							document.write("<table class='table tabledohorario'>");		
							document.write("<tr>");		
							document.write("<td>");		
							document.write("</td>");		
							<?php while ($rowx = mysqli_fetch_assoc($resultx)) {?>
							    document.write("<td>"+"<?php echo $rowx['tur_nome']?>"+"</td>");    
							<?php } ?>
							document.write("</tr>");		
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==29){
						<?php $aula= "qisegunda";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==30){
						<?php $aula= "qiterceira";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==31){
						<?php $aula= "qiquarta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==32){
						<?php $aula= "qiquinta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==33){
						<?php $aula= "qisexta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==34){
						<?php $aula= "qisetima";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==35){
						<?php $aula= "qioitava";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==36){
						<?php $aula= "qinona";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==37){
						<?php $aula= "sprimeira";?>
						if (quebrartrueorfalse == true) {
	     					if (quebrartrueorfalse == true) {
							<?php $sqlx = "SELECT * from tb_turmas"; $resultx = mysqli_query($conn,$sqlx); $numerodelinha = mysqli_num_rows($resultx); ?> 	
							document.write("</table>");		
							document.write("<p class='centrar'>Sexta-Feira</p>");				
							document.write("<table class='table tabledohorario'>");		
							document.write("<tr>");		
							document.write("<td>");		
							document.write("</td>");		
							<?php while ($rowx = mysqli_fetch_assoc($resultx)) {?>
							    document.write("<td>"+"<?php echo $rowx['tur_nome']?>"+"</td>");    
							<?php } ?>
							document.write("</tr>");		
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}
					}else if(j==38){
						<?php $aula= "ssegunda";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==39){
						<?php $aula= "sterceira";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==40){
						<?php $aula= "squarta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==41){
						<?php $aula= "squinta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==42){
						<?php $aula= "ssexta";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==43){
						<?php $aula= "ssetima";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==44){
						<?php $aula= "soitava";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}else if(j==45){
						<?php $aula= "snona";?>
						if (quebrartrueorfalse == true) {
	     					document.write ("<tr id='"+"<?php echo $aula ?>"+"'>");
						}
					}

					if (j>9 && j<19) {
							var tj = j-9;
							if (quebrartrueorfalse == true) {
								document.write("<td>"+tj+"° Aula"+"</td>");
							}
						}else if (j>18 && j<28) {
							var qj = j-18;
							if (quebrartrueorfalse == true) {
								document.write( "<td>"+qj+"° Aula"+"</td>");
							}
						}else if (j>27 && j<37) {
							var qij = j-27;
							if (quebrartrueorfalse == true) {
								document.write("<td>"+ qij+"° Aula"+"</td>");
							}
						}else if (j>36 && j<46) {
							var sj = j-36;
							if (quebrartrueorfalse == true) {
								document.write("<td>"+ sj+"° Aula"+"</td>");
							}
						}else{
							if (quebrartrueorfalse == true) {
								document.write("<td>"+j+"° Aula"+"</td>");
							}
						}

					
				
			     	document.write ("<td>");
					document.write ("<select class='form-control selecaoo' onchange='ocl()' >");
					document.write ("<option>");
					document.write ("Selecionar...");
					document.write ("</option>");

				<?php while ($row3 = mysqli_fetch_assoc($query3)) { ?>
	      			var aux = "<?=$row3['dis_nome']?>";
					document.write("div id= '"+"<?php echo $row3['iddisciplinas'] ?>"+"'>");
					if ($spri[i] == aux) {
						document.write("<option selected id='"+"<?php echo $row3['iddisciplinas'] ?>"+"'>");
						document.write("<?php echo $row3['dis_nome']  ?>");            	
		            	document.write("</option>");
					}else{
						document.write("<option id='"+"<?php echo $row3['iddisciplinas'] ?>"+"'>");
						document.write("<?php echo $row3['dis_nome']  ?>");            	
		            	document.write("</option>");
					}
	            	document.write("</div");
				<?php }?>
	        	document.write("</select>");
	        	document.write("</td>");
	     		
	     		if (fechatrueorfalse == true) {
	     			document.write ("</tr>")	
				}	     	
			}		
		</script>		
<?php
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
	


	segpri = [];
	segprim = [];
	segseg = [];
	segsegm = [];
	segter = [];
	segterm = [];
	segqua = [];
	segquam = [];
	segqui = [];
	segquim = [];
	segsex = [];
	segsexm = [];
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
         	// console.log(resposta);
         	
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
         	// console.log(resposta);
         	
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
         	// console.log(resposta);
         	
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
         	// console.log(resposta);
         	
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
         	// console.log(resposta);
         	
         });
         
         }
</script>
<script>
	function recuperar(){
		header('location:recuperar.php');
	}
</script>
<script>
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
		// onsole.log(c.length);


		for (var i = 0; i <= c.length - 1; i++) {
			if (c[i].value != undefined && c[i].value != "Selecionar..." ) {
 
	
					 		 
				//aqui em baixo mostra como cheguei a qual tempo essa aula pertence
		 		var numberos = i/qntddd;
				var numberosfinal = Math.trunc(numberos);

// console.log(			qntddd);

		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 0  ) {
 					var adicionar = segpri.push(c[i].value);				 				
	 				cont++;
	 				if (cont>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = segpri.length-q;
	 						auxx = segpri.length-qntddd;
 							if (q==0) {segprim[0] = segpri[auxx];
	 						}else{
 								segprim[q] = segpri[aux];
	 						}
	 					}
		 				for (var j = 0; j < segprim.length; j++) {
		 					if (hasDuplicates(segprim)==true){
 								console.log("tesand0");
		 						primeira.style.background = 'red';
		 					}else{
		 						primeira.style.background = 'white';
		 					}	
		 				}
	 				}		 				
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 1) {
		 			var adicionar = segseg.push(c[i].value);				 				
	 				cont2++;
	 				if (cont2>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = segseg.length-q;
	 						auxx = segseg.length-qntddd;
 							if (q==0) {segsegm[0] = segseg[auxx];
	 						}else{
 								segsegm[q] = segseg[aux];
	 						}
	 					}
		 				for (var j = 0; j < segsegm.length; j++) {
		 					if (hasDuplicates(segsegm)==true){
		 						segunda.style.background = 'red';
		 						console.log("testeeeeeee");
		 					}else{
		 						segunda.style.background = 'white';
		 					}	
		 				}
	 				}		 
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 2  ) {
		 			var adicionar = segter.push(c[i].value);				 				
	 				cont3++;
	 				if (cont3>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = segter.length-q;
	 						auxx = segter.length-qntddd;
 							if (q==0) {segterm[0] = segter[auxx];
	 						}else{
 								segterm[q] = segter[aux];
	 						}
	 					}
		 				for (var j = 0; j < segterm.length; j++) {
		 					if (hasDuplicates(segterm)==true){
		 						terceira.style.background = 'red';
		 					}else{
		 						terceira.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 3  ) {
		 			var adicionar = segqua.push(c[i].value);				 				
	 				cont4++;
	 				if (cont4>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = segqua.length-q;
	 						auxx = segqua.length-qntddd;
 							if (q==0) {segquam[0] = segqua[auxx];
	 						}else{
 								segquam[q] = segqua[aux];
	 						}
	 					}
		 				for (var j = 0; j < segquam.length; j++) {
		 					if (hasDuplicates(segquam)==true){
		 						quarta.style.background = 'red';
		 					}else{
		 						quarta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 4  ) {
		 			var adicionar = segqui.push(c[i].value);				 				
	 				cont5++;
	 				if (cont5>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = segqui.length-q;
	 						auxx = segqui.length-qntddd;
 							if (q==0) {segquim[0] = segqui[auxx];
	 						}else{
 								segquim[q] = segqui[aux];
	 						}
	 					}
		 				for (var j = 0; j < segquim.length; j++) {
		 					if (hasDuplicates(segquim)==true){
		 						quinta.style.background = 'red';
		 					}else{
		 						quinta.style.background = 'white';
		 					}	
		 				}
	 				}
		 		}
		 		if (c[i].value != undefined && c[i].value != "Selecionar..." && numberosfinal == 5  ) {
		 			var adicionar = segsex.push(c[i].value);				 				
	 				cont6++;
	 				if (cont6>=qntddd) {
		 				for (var q = 0; q < qntddd; q++) {
	 						aux = segsex.length-q;
	 						auxx = segsex.length-qntddd;
 							if (q==0) {segsexm[0] = segsex[auxx];
	 						}else{
 								segsexm[q] = segsex[aux];
	 						}
	 					}
		 				for (var j = 0; j < segsexm.length; j++) {
		 					if (hasDuplicates(segsexm)==true){
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


					<?php echo "a".$rowf['idtb_turmas']?>[0] = segprim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[1] = segsegm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[2] = segterm[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[3] = segquam[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[4] = segquim[varijs];
					<?php echo "a".$rowf['idtb_turmas']?>[5] = segsexm[varijs];
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