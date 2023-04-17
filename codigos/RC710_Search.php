<!--
    https://br.godaddy.com/help/como-se-conectar-ao-mysql-usando-php-216
    Ideias:
    A interface ter uma textbox onde o user escreve o nome do utilizador para adicionar caso o nome estiver mal escrito vais a base de dados buscar um parecido e sugerir para add
    
-->
<?php
// Variáveis com as informações do usuário atual e do amigo a ser adicionado
$id_usuario_atual = 1; // substitua pelo ID do usuário atual
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome do amigo a ser adicionado através da caixa de texto
    $nome_amigo = test_input($_POST["nome_amigo"]);

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "crs"; 
    $password = ""; 
    $dbname = "chat_rede_social";

    $conn = mysqli_connect($servername, $username, $password, $dbname);// Verificação da conexão com o banco de dados
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // Busca o ID do amigo a partir do nome inserido na caixa de texto
    $sql = "SELECT id FROM usuarios WHERE nome='$nome_amigo'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id_amigo = $row["id"];

    // Inserção do amigo na tabela de amigos
    $sql = "INSERT INTO amigos (id_usuario, id_amigo) VALUES ('$id_usuario_atual', '$id_amigo')";

    if (mysqli_query($conn, $sql)) {
        echo "Amigo adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar amigo: " . mysqli_error($conn);
    }
    } else {
        echo "Usuário não encontrado.";
    }
    mysqli_close($conn);
}
    // Função para validar a entrada de dados
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Nome do amigo a adicionar: <input type="text" name="nome_amigo"><br>
                <input type="submit" name="submit" value="Adicionar">
            </form>
