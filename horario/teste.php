<script>
    var x = 0;
    $spri = [];
    console.log($spri);
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

$es = "SELECT * FROM tb_turmas";
$ef = mysqli_query($conn, $es);
 
?>

<script type="text/javascript">
    var w = 24/12;
    var qq = Number.isInteger(w);
    console.log(qq);
</script>