
<html>
    <body style="background-color: #E0FFFF">
        <form action="" method="post">
            Nome da conta<input type="text" id="usuario" name="name" ><br>
            <input type=submit value=delete name="Delete account">
            <?php
                if(isset($_POST["delete"])){
                    require('RC710_Connect.php');
                    $user=$_POST['usuario'];

                    $sql = "SELECT FROM tab_user WHERE '$user'";
                    $resultado = $conn->query($sql);
                        
                    if ($result->num_rows > 0){
                        echo "O usuario existe!";

                        $stmt = mysqli_prepare($conn,"DELETE FROM tab_user WHERE nome = ?");

                        mysqli_stmt_bind_param($stmt, "s", $user);

                        mysqli_stmt_execute($stmt);

                        if (mysqli_num_rows($conn) > 0){
                            echo " O User deletado";
                        }else{
                            echo "O User não pode ser elemindo";
                        }
                        
                    }else{
                        echo"o Usuario não existe";
                    }

                    $conn->close();

                }
                
            ?> 
        </form>
    </body>
 </html>