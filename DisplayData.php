<?php
include("connect.php");
error_reporting(0);
$query = "SELECT * FROM business_data";
$data =mysqli_query($conn,$query); 
$total = mysqli_num_rows($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Database</title>
    <link rel="stylesheet" href="DisplayDataBase.css">
    <link rel="icon" href="photo/Rion Group.png" type="image/gif/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <table>
         <tr>
            <th id="Tablehead" colspan="10">All Business Record</th>
        </tr>
        <tr>
            <th id="tablehead">ID</th>
            <th id="tablehead">Date</th>
            <th>Total Amount</th>
            <th>Profit</th>
            <th>Tarun Amount</th>
            <th>Tarun Percentage</th>
            <th>Tarun Profit</th>
            <th>Rion Amount</th>
            <th>Rion Percentage</th>
            <th>Rion Profit</th>
        </tr>

        <?php

       if($total!=0)
       {
            while($result = mysqli_fetch_assoc($data)){
                echo "<tr>
                <td>".$result['ID']."</td>
                <td>".$result['Date']."</td>
                <td>".$result['Total_Amount']." Tk</td>
                <td>".$result['Total_Profit']." Tk</td>
                <td>".$result['Tarun_Amount']." Tk</td>
                <td>".$result['Tarun_Percentage']." %</td>
                <td>".$result['Tarun_Profit']." Tk</td>
                <td>".$result['Rion_Amount']." Tk</td>
                <td>".$result['Rion_Percentage']." %</td>
                <td>".$result['Rion_Profit']." Tk</td>
                
                </tr>";

            }


    
        }
        else{

        }
        ?>


    </table>
    
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