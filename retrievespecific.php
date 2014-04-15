<html>
 <head>
  <title>Register page</title>
 </head>
 <body>
  
   <?php
    include('user.php');
     $tablempya=new User();
     $tablempya->getTable($tablempya->setTable('user'));
     $tablempya->setColumns('id');
     $tablempya->getColumns();
     $tablempya->setValu('19');
     $tablempya->getValu();

     //get the values
    

     //create a table to print the results   
      
      echo "<table>
            <tr><td>ID</td><td>Username</td><td>Password</td></tr>
           ";
   foreach ($tablempya->selectUser2 as $value) {

        echo "<tr><td>". $value[0]."</td><td>". $value[1]."</td><td>". $value[2]."</td></tr>";
      };

      echo"</table>"; 
      
        
       
       
   ?>
 </body>


</html>