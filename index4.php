<?php
   try{
       $pdo = new PDO('mysql:host=localhost;dbname=bcc',"root","");
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
       $consulta = $pdo->query("SELECT * FROM time;");
   
       while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
           echo "Código: {$linha['idtime']} - Nome: {$linha['nome']} - Número de torcedores: {$linha['num_torcedor']} - Cidade: {$linha['cidade']}<br />";
   
       }
   } catch(PDOException $e){
       echo 'Error:'.$e->getMessage();
   }