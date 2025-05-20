<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="BusinessCalculator.css">
    <link rel="icon" href="photo/Rion Group.png" type="image/gif/png">


    <title>Business Calculator</title>
</head>
<body>
    <div style="height: 70px; ;"></div>

    <main>

        <h1 class="header">Business Calculator</h1>

    <div class="mainDiv">

        <form class="" action="PHPConnect.php" method="post">
        


            <div>
                <label for="">Date :</label>
                <input type="date" name="Date" class="input" id="date" required><br>
                <span id="date_error" ><?php $dateErr; ?></span>
            </div>
            
            
        
            
            <div>
                <label for="">Total Amount :</label>
                <input type="text" name="totalAmount" class="input" id="total" placeholder="Enter total amount" required><br>
                <span id="total_error" ><?php $TotalAmountErr; ?></span>
            </div>
            

            
            <div>
                <label for="">Your Amount :</label>
                <input type="text" name="yourAmount" class="input" id="yourAmount" placeholder="Enter your amount" required><br>
                <span id="yourAmount_error" ><?php $YourAmountErr; ?></span></>
            </div>

            
            <div>
                <label for="">Total Profit :</label>
                <input type="text" name="profit" class="input" id="profit" placeholder="Enter profit amount" required><br>
                <span id="profit_error" ><?php $ProfitErr; ?></span>
            </div>
           

            <div id="rates">
                
                <div>
                    <label for="nameOfPerson">Select : </label>
                    <input type="radio" id="redioButton1" name="gender" value="Tarun" required>
                    <label for="Tarun">Tarun</label>
                    <input type="radio" id="redioButton2" name="gender" value="Rion" required>
                    <label for="Rion">Rion</label><br>
                    <span id="redio_error"><?php $GenderErr; ?></span>
                </div>
                
            </div>
            
                
            <input type="submit" value="Submit" class="button" id="btn" name="submit">
            <input type="reset" class="button">


        </form>


    </div>

    <div class="lastDiv"><h2>Thank You for coming</h2></div>

    </main>
    
    
    
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