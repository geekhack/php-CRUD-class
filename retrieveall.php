<html>
 <head>
  <title>Register page</title>
 </head>
 <body>
  
   <?php
    include('user.php');
     $tablempya=new User();
     $tablempya->getTable($tablempya->setTable('user'));
     //create a table to print the results   
      
      echo "<table>
            <tr><td>ID</td><td>Username</td><td>Password</td></tr>
           ";
      foreach ($tablempya->selectUser($tablempya->getColumns()) as $value) {

        echo "<tr><td>". $value[0]."</td><td>". $value[1]."</td><td>". $value[2]."</td></tr>";
      };

      echo"</table>";         
       
       
   ?>
 </body>


</html>