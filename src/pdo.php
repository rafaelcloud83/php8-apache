<?php
try {
  $conn = new PDO('mysql:host=db;dbname=banco', 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectado';
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>