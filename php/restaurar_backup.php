<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);

foreach ($data as $orcamento) {
    $sql = "INSERT INTO orcamentos (descricao) VALUES (:descricao)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':descricao', $orcamento['descricao']);
    $stmt->execute();
    $orcamento_id = $pdo->lastInsertId();

    foreach ($orcamento['itens'] as $item) {
        $sql = "INSERT INTO itens (orcamento_id, descricao, valor, fornecedor, foto) VALUES (:orcamento_id, :descricao, :valor, :fornecedor, :foto)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':orcamento_id', $orcamento_id);
        $stmt->bindParam(':descricao', $item['descricao']);
        $stmt->bindParam(':valor', $item['valor']);
        $stmt->bindParam(':fornecedor', $item['fornecedor']);
        $stmt->bindParam(':foto', $item['foto']);
        $stmt->execute();
    }
}

echo json_encode(['success' => true]);
?>