
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
  
  
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $datanascimento = $_POST["dataNascimento"];

  
  
  $sql = "INSERT INTO tab_user (usr_username_id, usr_email, usr_pwd, usr_Data_Nas, usr_timestamp) VALUES ('$username', '$email', '$password', '$datanascimento', CURRENT_TIMESTAMP)";
  
  if($conn->query($sql) === TRUE){
    echo "Utilizador registado com sucesso!";
    sleep(5);
    header("Location: http://localhost/RC710_Login.php");
    exit(); 


  } else{
    echo "Erro ao registar o utilizador: " . $conn->error;
  }
  
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registo de Utilizador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <h1>Registo de Utilizador</h1>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nome">Nome:</label>
    <input type="text" name="username" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>

    <label for="datanascimento">Data de nascimento:</label>
    <input type="date" class="form-control" name="dataNascimento" id="inputDate"><br><br>
    
    <input type="submit" name='reslt01' value="Registar">
  </form>

</body>
</html>
