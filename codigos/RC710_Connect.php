<?php
$host = "localhost";
$user = "crs";
$pwd = "";
$dbName = "chat_rede_social";

$conn =  new mysqli($host, $user, $pwd, $dbName);

if ($conn->connect_error) {
    die("Conexão à base de dados falhou: " . $conn->connect_error);
}

echo "Conexão estabelecida à base de dados!";
?>