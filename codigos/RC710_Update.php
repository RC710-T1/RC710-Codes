<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: RC710_Index.php");
    exit();
}

// Configuração do banco de dados
$dbhost = 'localhost';
$dbname = 'database_name';
$dbuser = 'username';
$dbpass = 'password';

// Conectando ao banco de dados
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpass);

// Verificando se o formulário foi enviado
if (isset($_POST['submit'])) {
    // Obtendo dados do formulário
    $username = $_SESSION['username'];
    $password = $_POST['password'];

    // Atualizando os dados do usuário no banco de dados
    $stmt = $conn->prepare("UPDATE users SET password = :password WHERE username = :username");
    $stmt->execute(['password' => $password, 'username' => $username]);

    // Redirecionando para a página de perfil do usuário
    header("Location: profile.php");
    exit();
}

// Obtendo os dados do usuário do banco de dados
$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute(['username' => $_SESSION['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Atualizar login e senha</title>
</head>
<body>
    <h1>Atualizar login e senha</h1>
    <form method="post">
        <label for="username">Nome de usuário: <?php echo $user['username']; ?></label><br>
        <label for="password">Nova senha:</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Atualizar">
    </form>
    <?php 
    // https://www.devmedia.com.br/sistema-de-autenticacao-de-usuarios-em-php-usando-sessoes-e-mysql/37258
    // https://www.youtube.com/watch?v=JMEm0UN9JYs
    // https://youtu.be/QQUNOcy_i6A
    // https://www.youtube.com/watch?v=i1eWseYc1c0
    // https://code-boxx.com/user-registration-email-php-mysql/
    // https://www.youtube.com/watch?v=8K4Wt37Itc4
    ?>
</body>
</html>