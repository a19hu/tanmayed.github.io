<?php

include 'databuy.php';

if(isset($_POST['done'])){

 $username = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $location = $_POST['location'];
 $date = $_POST['date'];
 $description = $_POST['description'];
 $q = "INSERT INTO `lost`(`name`, `email`, `phone`, `location`, `date`, `description`)  VALUES  ('$username','$email','$phone','$location','date','$description')";

 $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lost and Found </title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #ffe9e9;
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
        .form{
            box-shadow: 10px 5px 5px rgb(125, 123, 123);
            background-color: #c0cac1;
        }
	</style>
</head>
<body>
	<form class="form" method="post"action="lost.php">
		<h1>Lost and Found Form</h1>
		<label for="name">Your Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required>

		<label for="email">Your Email:</label>
		<input type="text" id="email" name="email" placeholder="Enter your email" required>

		<label for="phone">Your Phone:</label>
		<input type="text" id="phone" name="phone" placeholder="Enter your phone number">

		<label for="item">Lost/Found Item:</label>
		<input type="text" id="item" name="item" placeholder="Enter the name of the item" required>

		<label for="location">Location:</label>
		<input type="text" id="location" name="location" placeholder="Where was the item lost/found?" required>

		<label for="date">Date:</label>
		<input type="datetime-local" id="date" name="date" placeholder="When was the item lost/found?" required>

		<label for="description">Description:</label>
		<textarea id="description" name="description" placeholder="Please describe the item and any distinguishing features" required></textarea>

        <label for="picture">Picture:( size less than 10 mb)</label>
            <input type="file" id="picture" name="picture" accept="image/*">
        

		<input type="submit" value="Submit" name="done">
	</form>
</body>
</html>