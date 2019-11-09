<?php
    session_start();
    require_once "database/dbConn.php";
?>

<?php
if(isset($_POST['viewDel'])){
    $search_result = mysqli_query($dbConn, "SELECT * FROM users WHERE userId=" . $_POST['userId']);
    while($res = mysqli_fetch_array($search_result))
    {
        $userId = $res['userId'];
        $fullname = $res['fullname'];
        $username = $res['username'];
        $email = $res['email'];
        $phonenumber = $res['phonenumber'];
        $bloodgroup=$res['']
        $userType = $res['userType'];
    }
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Member Deleting Page</title>
        <link rel = "stylesheet" href = "css/homepage.css" /> 
    </head> 
    <body>
        <div id = "content">
            <h3>Are you sure you want to delete this member?</h3>
            <form action="processes/user_processes.php?userId=<?php echo $userId; ?>" method = "POST">
                <input type="hidden" name="userId" value="<?php echo $userId; ?>"/>
                <input type = "submit" name = "savechanges" value = "Yes"></a>
                <a href = "admin.php"><input type = "submit" name="back" value = "NO"> </a>
            </form>
        </div>
    </body>  
</html>
    <?php
         if(!isset($_GET['delete'])){
            exit();
        }
        else{
            $deleteCheck=$_GET['delete'];

            if($deleteCheck=="success"){
            echo"<p userId='success'>User updated successfully</p>";
            exit();
            }
        }     
     ?>
 </div>
</body>
</html>
