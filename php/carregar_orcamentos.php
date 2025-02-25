<?php
require 'config.php';

$sql = "SELECT * FROM orcamentos";
$stmt = $pdo->query($sql);
$orcamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($orcamentos);
?>