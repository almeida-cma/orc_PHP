<?php
require 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM orcamentos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$orcamento = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM itens WHERE orcamento_id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

$orcamento['itens'] = $itens;

echo json_encode($orcamento);
?>