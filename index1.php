<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=bcc',"root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->query("SELECT * FROM cliente;");

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "Código: {$linha['idcliente']} - Nome: {$linha['nome']} - E-mail: {$linha['e-mail']} - Telefone: {$linha['telefone']}<br />";

    }
} catch(PDOException $e){
    echo 'Error:'.$e->getMessage();
}
?>