<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
//$host = 'db';

// Database use name
//$user = 'root';

//database user password
//$pass = 'root';

// check the MySQL connection status
//$conn = new mysqli($host, $user, $pass);
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