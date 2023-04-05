<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  
  $host = "localhost";
  $user = "crs";
  $pwd = "";
  $db = "chat_rede_social";
  $conn = new mysqli($host, $user, $pwd, $db);
  
  
  if($conn->connect_error){
    die("Falha na conexão com a Base de Dados: " . $conn->connect_error);
  }
}   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bem-vindo ao PiuPiu</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Bem-vindo ao PiuPiu</h1>
		<p>Por favor, faça login ou registre-se para continuar.</p>

		<a href="RC710_Login.php" class="btn btn-primary">Login</a>
		<a href="RC710_Register.php" class="btn btn-success">Registar</a>
	</div>
</body>
</html>