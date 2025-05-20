<?php

//session_start();

$host = "localhost";
$user = "root";
$password ="";
$dataBaseName = "business_calculator";

//connect database with php 
$conn = mysqli_connect($host,$user,$password,$dataBaseName);


if($conn){
    //echo "Connect ok";
}
else{
    //echo "Connect faild";
}

?>