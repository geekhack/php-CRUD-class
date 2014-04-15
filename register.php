<html>
 <head>
  <title>Register page</title>
 </head>
 <body>
   <form method="post">
    <table>

      <tr><td><label for="username">Username:</label></td>
      	  <td><input type="text" name="username"></td>
      </tr>
      <tr><td><label for="password">Password:</label></td>
      	  <td><input type="password" name="password"></td>
      </tr>
      <tr><td></td>
      	  <td><input type="submit" name="register" value="Register"></td>
      </tr>
    </table>
   </form>
   <?php
    include('user.php');
     $tablempya=new User();
     $tablempya->getTable($tablempya->setTable('user'));
     $tablempya->getColumns($tablempya->setColumns(array('username','password')));

    if(isset($_POST['register'])){
     $tablempya->getValu($tablempya->setValu(array($_POST['username'],md5($_POST['password'])))); 
     $tablempya->insertUser();
   }
   ?>
 </body>


</html>