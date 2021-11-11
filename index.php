<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=bcc',"root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->query("SELECT * FROM estado;");

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "Código: {$linha['idestado']} - Nome: {$linha['nome']} - Sigla: {$linha['sigla']}<br />";

    }
} catch(PDOException $e){
    echo 'Error:'.$e->getMessage();
}
?>