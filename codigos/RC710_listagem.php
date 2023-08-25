<?php 
require('RC710_Connect.php');
?> 

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Listagem dos usuários</title> 
    </head> 
    <body> 
      <table border="1"> 
        <tr> 
          <td>Id</td> 
          <td>E-mail</td> 
          <td>Data de Nascimento</td> 
        </tr> 
        <tr> 
          <td><?php echo $dado['usr_username_id']; ?></td>
          <td><?php echo $dado['usr_email']; ?></td> 
          <td><?php echo date('d/m/Y', strtotime($dado['usr_Data_Nas'])); ?></td> 
        </tr> 
        <?php ?> 
      </table> 
    </body>

