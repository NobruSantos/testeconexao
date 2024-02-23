<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="crud">
        <h3>Lista de usuários da tabela testeconexao</h3>
        <?php
        require('../app/DataBase.php');
        $DataBase = new DataBase();
        $sql = "SELECT * FROM testetabela WHERE id > :id";
        $binds = ['id' => 'id'];
        $dados = $DataBase -> select($sql, $binds);
        if($dados -> rowCount() > 0){
            foreach($dados as $item){
                echo"<div class='result'>";
                echo"Nome: {$item['nome']}<br>";
                echo"Email: {$item['email']}<br>";
                echo"Descrição: {$item['descricao']}<br>";
                echo"</div><br>";
            }
        } else {
                echo "<div class = 'vazio'>";
                echo "Não temos usuários cadastrados";
                echo "</div>";
            }
        ?>
    </div>
    <a href="../form/index.php">Voltar</a>
</body>
</html>