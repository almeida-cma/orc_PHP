<?php
require 'config.php';

$orcamento_id = $_POST['orcamento_id'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$fornecedor = $_POST['fornecedor'];
$foto = null;

if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto = basename($_FILES['foto']['name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], '../uploads/' . $foto);
}

$sql = "INSERT INTO itens (orcamento_id, descricao, valor, fornecedor, foto) VALUES (:orcamento_id, :descricao, :valor, :fornecedor, :foto)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':orcamento_id', $orcamento_id);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':fornecedor', $fornecedor);
$stmt->bindParam(':foto', $foto);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>