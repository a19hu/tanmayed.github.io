<?php

include 'databuy.php';

if(isset($_POST['done'])){

 $username = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $item = $_POST['item'];
 $price = $_POST['price'];
 $description = $_POST['description'];
 $q = "INSERT INTO `ed`(`name`, `email`, `phone`, `item`, `price`, `description`) VALUES  ('$username','$email','$phone','$item','$price','$description')";

 $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>busel</title>
	<style>
		body { 
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		form {
			background-color: #fff;
			padding: 20px;
			max-width: 600px;
			margin: 50px auto;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
		}
		h1 {
			text-align: center;
			margin-top: 0;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], textarea {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		textarea {
			height: 100px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
<form action="buy.php" method="post">

		<h1>Buy /sell old goods </h1>
        
		<label for="name">Your Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required>

		<label for="email">Your Email:</label>
		<input type="text" id="email" name="email" placeholder="Enter your email" required>

		<label for="phone">Your Phone:</label>
		<input type="text" id="phone" name="phone" placeholder="Enter your phone number">

		<label for="item"> Item:</label>
		<input type="text" id="item" name="item" placeholder="Enter the name of the item" required>

            <div><label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="enter the price for item" min="0" required></div><br> 
                    

		

		<label for="description">Description:</label>
		<textarea id="description" name="description" placeholder="Please describe the item and any distinguishing features" required></textarea>

        <label for="picture">Picture:( size less than 10 mb)</label>
            <input type="file" id="picture" name="picture" accept="image/*">
        

		<input type="submit" value="Submit" name="done">
    
	</form>
</body>
</html>