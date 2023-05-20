<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelite.css">
    <link rel="stylesheet" href="acadmic.css">
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <div class="head">
        <div class="logo">
            <img src="iitjlogo.png" alt="">
        </div>
        <h1>IITJ</h1>
        <button class="login"><a href="login.html"> login</a></button>
        
    </div>
    <div class="acad">
       <hr>
    <h1 >Buy and Sell Inventory</h1> <hr> 
    </div>
    
    <div class="question">
        <div class="qa">
        <span>Your Name:</span>
        <span>Your Email</span>
        <span>Your Phone</span>
        <span>Location</span>
        <span>Date</span>
        <span>description</span> <br>
        <?php

include 'databuy.php';  
$selectqurey = "select* from lost"; 

 $query = mysqli_query($con,$selectqurey );
 while($res = mysqli_fetch_array($query)){
    ?>    <span>   <?php echo $res["name"];   ?></span>  <?php 
    ?> <span><?php echo $res["email"];   ?></span>  <?php
    ?> <span><?php echo $res["phone"];   ?></span> <?php
   ?> <span><?php echo $res["location"];   ?></span> <?php
   ?> <span><?php echo $res["date"];   ?></span> <?php
   ?>  <span><?php echo $res["description"];   ?></span> <?php 
   ?> <br>  <hr> <?php 
 }
?>
</div>               
</div>          


    <div class="last">
        <h2>IITJ helpdesk</h2>
        <p>iitj hepdesk team will be happy to help you anytime</p>

    </div>
    <div class="icon">
        <a href="https://www.instagram.com/insta_iitj2019/"><img src="instgram.png" alt=""></i></a>
        <a href="https://www.facebook.com/IITJOfficial/"><img src="facebook.png" alt=""></i></a> 
        <a href="https://www.linkedin.com/school/sme-iitj/?originalSubdomain=in" ><img src="linkedin.png" alt=""></i></a> 
       </div>
</body>
</html>