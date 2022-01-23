<?php
require_once('funcs.php');

$pdo = connectDB();//後で確認

$sql = 'SELECT * FROM gs_an_table WHERE id = :id LIMIT 1';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', (int)$_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$image = $stmt->fetch();

header('Content-type: ' . $gs_an_table['image_type']);
echo $gs_an_table['image_content'];
exit();
?>