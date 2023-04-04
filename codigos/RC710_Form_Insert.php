<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5">
        <h1 class="pb-3">Inserir novo utilizador manualmente</h1>
        <form method="post">
            <div class="mb-3">
                <label for="inputUsername" class="form-label">Nome</label>
                <input type="text" class="form-control" name="username" id="inputUsername">
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="inputEmail">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword">
            </div>
            <div class="mb-3">
                <label for="inputDate" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="dataNascimento" id="inputDate">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>