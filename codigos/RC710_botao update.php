<form method="POST" action="update.php">
    <label for="name">Name:</label>
    <input type="text" name="Update" id="name">
    <button type="submit" name="submit">Update</button>
</form>

<?php
if (isset($_POST["submit"])) {
    $hostname ="localhost";
    $username ="root";
    $password ="";
    $databasename ="chat_rede_social";

    $conn = mysqli_connect($hostname, $username, $password, $databasename);

    // Get the form data
    $name = $_POST['Update'];

    // Update the data
    $sql = "UPDATE users SET name='$name'";
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "Utilizador guardado com sucesso";
    } else {
        echo "Erro ao guardar informação do utilizador" . $conn->error;
    }

    // Close the database connection
    mysqli_close($conn);
}
?>