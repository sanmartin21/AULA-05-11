<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=bcc',"root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->query("SELECT * FROM vendedor;");

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "Código: {$linha['idvendedor']} - Login: {$linha['login']} - Senha: {$linha['senha']} - Nome: {$linha['nome']} - E-mail: {$linha['e-mail']} - Telefone: {$linha['telefone']}<br />";

    }
} catch(PDOException $e){
    echo 'Error:'.$e->getMessage();
}