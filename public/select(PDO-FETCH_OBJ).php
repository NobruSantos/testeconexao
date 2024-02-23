<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
    <h3>Lista de Usuário</h3>
    <?php
    require('../app/DataBase.php');
    $DataBase = new DataBase();
    $sql = "SELECT * FROM usuarios WHERE id > :id";
    $binds = ['id' => 0];
    $result = $DataBase -> select($sql, $binds);
    if($result -> rowCount() > 0){
        $dados = $result -> fetchAll(PDO:: FETCH_OBJ);
        foreach($dados as $item) {
        echo "<div class='result'>";
        echo "Nome : {$item -> nome}<br>";
        echo "Email : {$item -> email}<br>";
        echo "Descrição : {$item -> descricao}<br>";     
        echo "</div>";      
       } 
    } else {
        echo "<div class='result'>Não temos usuários cadastrados!</div>";
    }   
    ?>
</div>
</body>
</html>