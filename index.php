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
            //echo 'Login successful';

            //use for linked with another page...
            header("Location: BusinessCalculator.php");
           
            
        }else{
            //echo $uerror = 'Invalid';
        }

    }else{
        // echo 'fill this';
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Business Home Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="photo/Rion Group.png" type="image/gif/png">
    <script src="index.js"></script>
    <script src="login.js"></script>
</head>
<body>

    <header id="header">
        <h1>Builders Bird</h1>
        <div class="logo">
            <img id="logo" src="photo/Rion Group.png" alt="">
            <img id="logo2" src="photo/tarun.jpg" alt="">
        </div>      
        <div class="logo2">
            <!-- <img id="logo" src="photo/tarun.jpg" alt=""> -->
        </div>        
    </header>

    <div class="clock">
        <span id="hours">00</span>
        <span>:</span>
        <span id="minutes">00</span>
        <span>:</span>
        <span id="seconds">00</span>
        <span id="session">AM</span>
    </div>
    
    <main>
        <div class="center">

            <!--Block 1-->

            <div onclick="togglePopup()" id="div">
                <div id="child">
                    <button  class="first-button">
                        <img src="photo/img (1).png" alt="" id="photo">
                    </button>
                    <h5>Business Calculator</h5>
                </div>

            </div>
           

            <!-- <a href="BusinessCalculator.php">
                <div id="div">
                    <div id="child">
                        <img src="photo/img (1).png" alt="" id="photo">
                        <h5>Business Calculator</h5>
                    </div>
                </div>
            </a> -->
            
            <!--Block 2-->
            <a href="DisplayData.php">
                <div id="div">
                    <div id="child">
                        <img src="photo/img (2).png" alt="" id="photo2">
                        <h5>Business Data</h5>
                    </div>
                </div>
            </a>
        </div>
    </main>


    <form class="" action="" method="post">

        <div class="popup" id="popup-1">
            <div class="content">
        
                <h1>Sign in</h1> 
                <div class="input-field">
                    <input type="text"  placeholder="Username" class="validate" name="username" required>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" class="validate" name="password" required>
                </div>
                <button class="second-button" type="submit">Sign in</button>

                <p class="error uerror"></p>
            
                <div class="close-btn" onclick="togglePopup()">×</div>

            </div>
        </div>

    </form>


</body>

<footer class="footer">
    <div class="media-icons">
        <a href="https://www.facebook.com/mohaimenul.haquer/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/in/mohaimenul-haque-rion-6033721b9/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/mohaimenulhaquer/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    <span class="footer-title"><p>Developed By <a href="#">Mohaimenul Haque </a></p> </span>
    <p>Copyright &copy; <a href="#">rion's it </a></p>
  </footer>
  

  <!-- for resubmition issue -->
  <script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href)
    }
  </script>

</html>