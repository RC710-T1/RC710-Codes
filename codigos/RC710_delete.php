
<html>
    <body style="background-color: #E0FFFF">
        <form action="" method="post">
            Nome da conta<input type="text" name="name" required><br>
            <input type=submit value=delete name="Delete account">
            <?php
                if(isset($_POST["delete"])){
                    $hostname ="localhost";
                    $username =" root";
                    $password ="";
                    $databasename ="chat_rede_social";

                    $connect=mysqli_connect($hostname, $username, $password,$databasename);

                    $user=$_POST['name'];

                    if ($connect->connect_error){
                        die("Erro a conectar:" . $conn -> connect_error);
                    }

                    $sql = "DELETE FROM tab_user where $user";
                    $delete = mysqli_query($connect,$sql);
                        
                    if ($result){
                        echo "Utiliazdor eleminado com sucesso";
                    }else{
                        echo"Erro ao deletar utilizador" . $conn->error;
                    }

                    $conn->close();

                }
                
            ?> 
        </form>
    </body>
 </html>