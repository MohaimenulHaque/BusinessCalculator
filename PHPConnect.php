<?php
error_reporting(0);
include("connect.php");


$Date = $TotalAmount = $YourAmount = $Profit = null;

$DateErr = $TotalAmountErr = $YourAmountErr = $ProfitErr = '';

if(isset($_POST['submit'])){

    $Date = $_POST['Date'];
    $TotalAmount = $_POST['totalAmount'];
    $YourAmount = $_POST['yourAmount'];
    $Profit = $_POST['profit'];
    $Gender = $_POST['gender'];    

    $yourPercentage = (($YourAmount/$TotalAmount)*100);
    $yourProfit = (($yourPercentage/100)*$Profit);

    $oppositeAmount = $TotalAmount - $YourAmount;
    $oppositePercentage = (($oppositeAmount/$TotalAmount)*100);
    $oppositeProfit = (($oppositePercentage/100)*$Profit);


    if($Gender == 'Tarun'){
        $sql = "INSERT INTO business_data(Date,Total_Amount,Total_Profit,Tarun_Amount,Tarun_Percentage,Tarun_Profit,Rion_Amount,Rion_Percentage,Rion_Profit) 
    values('$Date','$TotalAmount','$Profit','$YourAmount','$yourPercentage','$yourProfit',' $oppositeAmount','$oppositePercentage','$oppositeProfit')";

    }
    else{
        $sql = "INSERT INTO business_data(Date,Total_Amount,Total_Profit,Rion_Amount,Rion_Percentage,Rion_Profit,Tarun_Amount,Tarun_Percentage,Tarun_Profit) 
    values('$Date','$TotalAmount','$Profit','$YourAmount','$yourPercentage','$yourProfit',' $oppositeAmount','$oppositePercentage','$oppositeProfit')";
        
    }
    
    //for exicute the database
    $query = mysqli_query($conn,$sql);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Calculation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="TotalClaculation.css">
    <link rel="icon" href="photo/Rion Group.png" type="image/gif/png">
</head>
<body>

    <div class="div">

        <h2>TOTAL CALCULATION</h2>

        <div id="output">

            <p >

                <?php
                    echo "Date: $Date<br>";
                    echo "Total Amount: $TotalAmount Tk <br>";
                    echo "Profit: $Profit Tk <br><br>";
                    if($Gender == 'Tarun'){
                        echo "Tarun Percentage: $yourPercentage% <br>";
                        echo "Tarun Amount: $YourAmount Tk <br>";
                        echo "Tarun Profit: $yourProfit Tk <br><br>";
                
                        echo "Rion Percentage: $oppositePercentage% <br>";
                        echo "Rion Amount: $oppositeAmount Tk <br>";
                        echo "Rion Profit: $oppositeProfit Tk <br>";
                
                    }
                    else{
                        echo "Rion Percentage: $yourPercentage% <br>";
                        echo "Rion Amount: $YourAmount Tk <br>";
                        echo "Rion Profit: $yourProfit Tk <br><br>";
                
                        echo "Tarun Percentage: $oppositePercentage% <br>";
                        echo "Tarun Amount: $oppositeAmount Tk <br>";
                        echo "Tarun Profit: $oppositeProfit Tk <br>";
                    };
                
                ?>

            </p>

            
            <a href="index.php">
                <div class="goHome">
                <h5>Go Home</h5>
                </div>
            </a>
            
        </div>


    </div>

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

</html>