<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
   <h3>Atualização de Dados</h3>
    <?php
    require('../app/DataBase.php');
    $DataBase = new DataBase();
    $sql = "UPDATE usuarios SET id = :id WHERE id > :id";
    $binds = ['id'=>'4','id' => 3];
    $result = $DataBase -> update($sql, $binds);
    if($result){ 
        echo "<div class='success'>Atualizado com sucesso!</div>";      
    }else{
        echo "<div class='result'>Nenhum dado foi atualizado!</div>";      
    }
    ?>
</div>
</body>
</html>