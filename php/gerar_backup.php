<?php
require 'config.php';

$sql = "SELECT * FROM orcamentos";
$stmt = $pdo->query($sql);
$orcamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($orcamentos as &$orcamento) {
    $sql = "SELECT * FROM itens WHERE orcamento_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $orcamento['id']);
    $stmt->execute();
    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $orcamento['itens'] = $itens;
}

echo json_encode($orcamentos);
?>