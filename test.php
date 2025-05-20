
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
    <script src="test.js"></script>
</head>
<body>
    
    <form class="" action="" method="post">

        <!-- <button onclick="togglePopup()" class="first-button">Sign In</button> -->

        <div class="popup" id="popup-1">
            <div class="content">
        
                <h1>Sign in</h1> 
                <div class="input-field"><input placeholder="Username" class="validate" required></div>
                <div class="input-field"><input placeholder="Password" class="validate" required></div>
                <button class="second-button" type="submit">Sign in</button>
            
                <div class="close-btn" onclick="togglePopup()">×</div>

            </div>
        </div>

    </form>

</body>
</html>