
<?php
// Inicia a sessão
session_start();

// Define o tempo de duração da sessão em segundos (30 minutos neste exemplo)
$session_duration = 1800; 

// Define o nome do cookie
$cookie_name = "my_session_cookie";

// Define o caminho do cookie (opcional)
$cookie_path = "/";

// Define o domínio do cookie (opcional)
$cookie_domain = "";

// Define se o cookie só pode ser enviado via HTTPS (opcional)
$cookie_secure = true;

// Define se o cookie só pode ser acessado pelo mesmo site (opcional)
$cookie_http_only = true;

// Verifica se o cookie já existe
if (!isset($_COOKIE[$cookie_name])) {
  // Define um valor aleatório para a sessão
  $session_id = md5(uniqid());

  // Define o valor do cookie
  setcookie($cookie_name, $session_id, time() + $session_duration, $cookie_path, $cookie_domain, $cookie_secure, $cookie_http_only);
} else {
  // Usa o valor do cookie existente
  $session_id = $_COOKIE[$cookie_name];
}

// Define a variável de sessão com o ID da sessão
$_SESSION['session_id'] = $session_id;

// Agora você pode usar a variável $_SESSION para armazenar e acessar dados da sessão
?>