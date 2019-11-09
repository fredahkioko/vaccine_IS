<?php
    session_start();
    require_once "database/dbConn.php";
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
9
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: 	#0073cf;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
<div id ="content">
            <div id ="wrap">
            <form action= "processes/user_processes.php" method = "POST">
              <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <th> Fullname </th>
                    <td> <input type = "text" name = "fullname" placeholder=" Your fullname" required autofocus /></td> 
                </tr>
                <tr>
                    <th> Username </th>
                    <td> <input type = "text" name = "username" placeholder=" Your username" required /></td> 
                </tr>
                <tr>
                    <th> Email </th>
                    <td> <input type = "email" name = "email" placeholder=" Your email" required /></td> 
                </tr>
                <tr>
                    <th> Password </th>
                    <td> <input type = "text" name = "phonenumber" placeholder=" Your phonenumber" required /></td> 
                </tr>
                <tr>
                    <th> Phhonenumber</th>
                    <td> <input type = "password" name = "password" placeholder=" Your password" required /></td> 
                </tr>
            
                <tr>
                    <th> rolename </th>
                    <td> <select name = "userType" required>
        
          </select>
            </td> 
                </tr>
                <div>
                <tr>
                    <td><input type = "submit" name = "save" value = "SAVE"></td>
                    <td><a href = "view.php"><input type = "submit" name = "back"value = "BACK"> </a></td>
                </tr>
            </div>
              </table>
            </form>
            <?php
         if(!isset($_GET['admin'])){
            exit();
        }
        else{
            $adminCheck=$_GET['admin'];

            if($adminCheck=="success"){
            echo"<p userId='success'>Member created successfully;Press BACK and click on VIEW USERS</p>";
            exit();
            ?> 

</table>
</body>  
</html>