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
      <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
      <label for="inputfullname" class="sr-only">Full Name</label>
      <input type="text" id="fullname" class="form-control" placeholder="Enter fullname" required autofocus>
      <label for="inputusername" class="sr-only">UserName</label><br>
      <input type="email" id="usernam" class="form-control" placeholder="Enter UserName" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label><br>
      <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputpassword" class="sr-only">Password</label><br>
      <input type="password" id="password" class="form-control" placeholder="Enter Password" required autofocus>
      <label for="inputconfpassword" class="sr-only">Confirm Password</label>
      <input type="password" id="conpassword" class="form-control" placeholder="Confirm Password" required autofocus>
      <label for="inputphonenumber" class="sr-only">Enter Phonenumber</label><br>
      <input type="string" id="phonenumber" class="form-control" placeholder="Enter Phonenumber" required autofocus><br>

      <select name = "userType" class="form-control" required>
            <option value = "">Please Select User Type</option>
            <option value = "Mother">Mother</option>
            <option value = "Father">Father</option>
            <option value = "Nurse">Nurse</option>
          </select>
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
