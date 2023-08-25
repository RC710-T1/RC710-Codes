<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require('RC710_Connect.php');
    $password = $_POST["password"];

    $sql = "SELECT * FROM tab_user WHERE usr_pwd=?";
    $result = $conn->prepare($sql);
    $result->bind_param("s", $password);
    $result->execute();
    $result->store_result();

    echo $result->num_rows;

    if ($result->num_rows >= 1){
        header("Location: RC710_Confirmed.php");
    } else {
        header("Location: RC710_Confirm_Password.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5">
        <h1 class="pb-3">Confirmar palavra-passe</h1>
        <form method="post">
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>