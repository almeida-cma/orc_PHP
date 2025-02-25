<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$descricao = $data['descricao'];

$sql = "INSERT INTO orcamentos (descricao) VALUES (:descricao)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':descricao', $descricao);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>