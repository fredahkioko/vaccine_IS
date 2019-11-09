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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <br>
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
<br>
  <body class="text-center">
  <br>
    <form class="form-signin"><br><br><br><br><br><br>
     <br> <img class="mb-4" src="../assets/images/login.png"style="border-radius:50px;" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Register Child</h1>
      <label for="inputchild-name" class="sr-only">Child Name</label><br>
      <input type="text" id="child-name" class="form-control" placeholder="Enter Child's Name" required autofocus>
      <label for="inputdob" class="sr-only">Date Of Bith</label><br>
      <input type="date" id="dob" class="form-control" placeholder="Enter Date Of Birth" required autofocus><br>
     
      <input type="radio" name="gender" checked>Male
   
   
      <input type="radio" name="gender">Female
     <br><br>
      <select name = "bloodgroup" class="form-control" required><br>
            <option value = "">Please Select Your Blood Group</option>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>
          </select><br>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-lg" type="submit">Register</button>
      <button class="btn btn-lg btn-danger btn-lg" type="submit">cancel</button>
     
    </form>
  </body>
</html>