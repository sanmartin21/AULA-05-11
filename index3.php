<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=bcc',"root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->query("SELECT * FROM jogador;");

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "Código: {$linha['idjogador']} - Nome: {$linha['nome']} - Time: {$linha['time']} - Posição: {$linha['posicao']} - Número de gols: {$linha['num_gol']}<br />";

    }
} catch(PDOException $e){
    echo 'Error:'.$e->getMessage();
}