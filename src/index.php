<?php
$conn = mysqli_connect('db','root','root');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Conectado com sucesso!!!";
}
$conn->close();
echo '<br><br><br>';
phpinfo();
?>
