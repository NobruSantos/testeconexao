<?php
$conn = new PDO('mysql:host=localhost;dbname={$dbname}', 'root', '');

$stmt = $conn->prepare("SELECT nome, idade FROM usuario WHERE idade > :idade AND nome = :nome");

$stmt -> bindValue(':idade', $idade);
$stmt -> bindValue(':nome', $nome);

$stmt -> execute();

?>