
<?php
// error_reporting(0);
session_start();

require("connect.php");





if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
        $sql = "SELECT id FROM sign_in WHERE Username = '$username' AND Password ='$password'";
        $sql_query = mysqli_query($conn,$sql);

        $mysqli_num_rows = mysqli_num_rows($sql_query);

        if($mysqli_num_rows){
            echo 'Login successful';
        }else{
            echo 'Invalid username or password';
        }

    }else{
        echo 'fill this';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <form action="" method="POST">
    username: <input type="text" name="username"><br><br>
    password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
  </form>

    
</body>
</html>