<?php
//start session service
session_start();
//Importing database connection
require_once "../database/dbConn.php";
//signup process
if (isset($_POST["signup"])) {
    //variable declaration
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname"]);
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $ConfPass = mysqli_real_escape_string($dbConn, $_POST["ConfPass"]);
    $phonenumber = mysqli_real_escape_string($dbConn, $_POST["phonenumber"]);
    $bloodgroup = mysqli_real_escape_string($dbConn, $_POST["bloodgroup"]);
    $rolename = mysqli_real_escape_string($dbConn, $_POST["rolename"]);
    
    //verifying if the password and confirm password are the same
    if ($password != $ConfPass) {
        header("Location: ../login.php?signup=Password error");
        exit();
    }
    //encrypting password
    $hash_password = password_hash($ConfPass, PASSWORD_DEFAULT);
    //inserting data innto users table
    $user_insert = "INSERT INTO tbl_user(fullname, username, email,password,phonenumber, rolename)VALUES('$fullname', '$username', '$email',' $password','$hash_password','$phonenumber', '$rolename')";
      //executing the sql query
    if($dbConn->query($user_insert) === TRUE){
        $last_id = $dbConn->insert_id;
        if($userType == "Supernurse"){
            header("Location: ../admin.php");
        }

       elseif ($rolename=='mother') {
          $mo_insert = "INSERT INTO tbl_motherbiodata(mother_id,bloodgroup,role_id) VALUES($bloodgroup','$role_id','$last_id')";
        }
        elseif ($rolename=='father') {
          $mo_insert = "INSERT INTO tbl_fatherbiodata(father_id,bloodgroup,role_id) VALUES($bloodgroup','$role_id','$last_id')";
        
        }
        elseif ($rolename=='guardian') {
          $mo_insert = "INSERT INTO tbl_guardianbiodata(guardian_id,bloodgroup,role_id) VALUES($bloodgroup','$role_id','$last_id')";
        }
        $dbConn->query($mo_insert);
          header("Location: ../login.php?register=success");
              exit();
              }else{
                  die("Registration Failed:  <br />" .$dbConn->error);
              }     
}
//signin process
if(isset($_POST["signin"])){
    //variable declaration
$entered_email = mysqli_real_escape_string($dbConn, $_POST["email"]);
$entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);
//verify if username matches any record
$spot_email = "SELECT * FROM tbl_users WHERE email = '$entered_email' LIMIT 1";
//executing the select query
$uName_res = $dbConn->query($spot_email);
//count atleast one matching row
if($uName_res->num_rows > 0){
    //session
    $_SESSION["control"] = $uName_res->fetch_assoc();
    //fetching stored password with session
    $stored_password = $_SESSION["control"]["password"];
    $rolename= $_SESSION["control"]["rolename"];
    $logIdx = $_SESSION["control"]["user_Id"];
    $_SESSION['LoggedINx'] = $logIdx;
     //verify if entered password is identical to the stored password
        //echo $userType;
        if (password_verify($entered_password, $stored_password)) {
            if($rolename == "Mother" || $rolename == "Father"|| $rolename == "guardian"){
              $_SESSION['Parent'] = $rolename;
              if ($userType=='Mother') {
                $sqlGetM  = "SELECT * FROM tbl_motherbiodata WHERE mother_id = '$logIdx'";
                $rowp = $dbConn->query($sqlGetM);
                while ($row = $rowp->fetch_assoc()) {
                    $_SESSION['bloodgroup'] = $row['bloodgroup'];
                }
                header("Location: ../parent.php");
                exit();
              }elseif ($rolename == 'Father') {
                $sqlGetM  = "SELECT * FROM tbl_fatherbiodata WHERE father_id = '$logIdx'";
                $rowp = $dbConn->query($sqlGetM);
                while ($row = $rowp->fetch_assoc()) {
                 $_SESSION['bloodgroupp'] = $row['bloodgroup'];
                }
                header("Location: ../parent.php");
                exit();
              }

            }else if($rolename == "guardian") {
                $sqlGetM  = "SELECT * FROM tbl_guardianbiodata WHERE father_id = '$logIdx'";
                $rowp = $dbConn->query($sqlGetM);
                while ($row = $rowp->fetch_assoc()) {
                 $_SESSION['bloodgroupp'] = $row['bloodgroup'];
                }
                header("Location: ../parent.php");
                exit();
                
            }
          }
        }else{
            unset($_SESSION["control"]);
            header("Location: ../login.php?signup=Credentials error");
            exit();
        }

    }
//signout process
if (isset($_GET["signout"])) {
        unset($_SESSION["control"]);
        session_destroy();
        header("Location: ../login.php");
        exit();
} 
if (isset($_POST["save"])) {
    //variable declaration
           //variable declaration
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname"]);
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $ConfPass = mysqli_real_escape_string($dbConn, $_POST["ConfPass"]);
    $phonenumber = mysqli_real_escape_string($dbConn, $_POST["phonenumber"]);
    $bloodgroup = mysqli_real_escape_string($dbConn, $_POST["bloodgroup"]);
    $rolename = mysqli_real_escape_string($dbConn, $_POST["rolename"]);
    
    //verifying if the password and confirm password are the same
    if ($password != $ConfPass) {
        header("Location: ../login.php?signup=Password error");
        exit();
    }
    //encrypting password
    $hash_password = password_hash($ConfPass, PASSWORD_DEFAULT);
    //inserting data innto users table
    $user_insert = "INSERT INTO tbl_user(fullname, username, email,password,phonenumber, rolename)VALUES('$fullname', '$username', '$email',' $password','$hash_password','$phonenumber', '$rolename')";
      //executing the sql query
    if($dbConn->query($user_insert) === TRUE){
        $last_id = $dbConn->insert_id;
        if($userType == "Supernurse"){
            header("Location: ../admin.php");
       elseif ($rolename=='mother') {
          $mo_insert = "INSERT INTO tbl_motherbiodata(mother_id,bloodgroup,role_id) VALUES($bloodgroup','$role_id','$last_id')";
        }
        elseif ($rolename=='father') {
          $mo_insert = "INSERT INTO tbl_fatherbiodata(father_id,bloodgroup,role_id) VALUES($bloodgroup','$role_id','$last_id')";
        
        }
        elseif ($rolename=='guardian') {
          $mo_insert = "INSERT INTO tbl_guardianbiodata(guardian_id,bloodgroup,role_id) VALUES($bloodgroup','$role_id','$last_id')";
        }
        $dbConn->query($mo_insert);
          header("Location: ../login.php?register=success");
              exit();
              }else{
                  die("Registration Failed:  <br />" .$dbConn->error);
              }     
}
if(isset($_POST['update'])){
    //variable declaration.
    $user_id = $_GET['user_id'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $bloodgroup=$_POST['bloodgroup']
    $rolename = $_POST['rolename'];

//updating the table
        $result = "UPDATE tbl_users SET fullname='$fullname', username='$username', email='$email', phonenumber='$phonenumber', bloodgroup='$bloodgroup,'rolename='$rolename' WHERE user_id=$user_id";
//redirecting to the display page
        if(mysqli_query($dbConn, $result)){
            header("Location: ../parent/view.php?update=success");
            exit();
        } else {
            die("User Update failed: <br /> " .$dbConn->error);
        }
}
if(isset($_POST['savechanges'])){

        $del= "DELETE FROM tbl_users WHERE user_id=" . $_POST['user_id']."";

        //redirectig to the display page.
        if($dbConn->query($del) === TRUE){
            header("Location: ../parent/view.php?delete=success");
            exit();
        } else {
            die("User Deletion failed: <br /> " .$dbConn->error);
        }

?>