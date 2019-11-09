<?php
    require_once "./database/db_conn.php";
    $sqlGetR = "SELECT * FROM tbl_roles where role_id !=4 and role_id !=5" ;
    $result = $conn->query($sqlGetR);
   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <br>
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
<br>
  <body class="text-center">
  <br>
    <form action="processes/user_processes.php"method = "POST"class="form-signin" ><br><br><br><br><br><br>
     <br> <img class="mb-4" src="assets/images/login.png"style="border-radius:50px;" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
      <label for="inputfullname" class="sr-only">Full Name</label>
      <input type="text" id="fullname" class="form-control" placeholder="Enter fullname" required autofocus>
      <label for="inputusername" class="sr-only">UserName</label><br>
      <input type="text" id="username" class="form-control" placeholder="Enter UserName" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label><br>
      <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputpassword" class="sr-only">Password</label><br>
      <input type="password" id="password" class="form-control" placeholder="Enter Password" required autofocus>
      <label for="inputconfpassword" class="sr-only">Confirm Password</label>
      <input type="password" id="confpass" class="form-control" placeholder="Confirm Password" required autofocus>
      <label for="inputphonenumber" class="sr-only">Enter Phonenumber</label><br>
      <input type="string" id="phonenumber" class="form-control" placeholder="Enter Phonenumber" required autofocus><br><br>
   
     <select name="bloodgroup"class="form-control"  placeholder= "Enter bloodgroup"required autofocus>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>
          </select><br>

      <select name = "role_id" class="form-control" required>
        <?php
          while($row = $result->fetch_assoc()){
            echo '<option value="'.$row['role_id'].'">'.$row['role_name'].'</option>';
          }
        ?>
      </select>
     
      <br>
      <button class="btn btn-lg btn-primary btn-lg" type="submit">Register</button>
      <button class="btn btn-lg btn-danger btn-lg" type="submit">cancel</button>
     
    </form>
  </body>
</html>