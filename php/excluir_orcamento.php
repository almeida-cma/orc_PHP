<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

$sql = "DELETE FROM orcamentos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>