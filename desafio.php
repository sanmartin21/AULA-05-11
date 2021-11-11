<?php
   $marca = isset($_POST['marca']) ? $_POST['marca'] : "";
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST"> 
        <fieldset>
        <legend>Procurar marcas</legend>
        <label for ="marca"></label>
        <input name="marca" id="marca">
        <input type="submit" value="Enviar"><br>
        <br>
        <h3>Código    Descrição</h3>
                <?php
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=bcc',"root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta = $pdo->prepare("SELECT * FROM marca
                                        WHERE descricao
                                        LIKE :descricao
                                        ORDER BY descricao;");
            $valor = $marca;
            $consulta->bindValue(':descricao', $valor."%",PDO::PARAM_STR);
            $consulta->execute();

            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                echo "       {$linha['codigo']} - {$linha['descricao']}<br />";

            }
        } catch(PDOException $e){
            echo 'Error:'.$e->getMessage();
        }
        ?>




        </fieldset>
    </form>
</body>
</html>