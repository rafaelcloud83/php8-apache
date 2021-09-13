<?php
try {
  $conn = new PDO('mysql:host=db;dbname=nomeBanco', 'root', 'root');
  //substituir o nomeBanco pelo seu banco
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectado';
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
