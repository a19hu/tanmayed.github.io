<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APNAmart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center">
        <div class="container">
            <div class="right">
                <h1>Create Account</h1>
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <form action="registration.php" method="post" class="form" name="submit-to-google-sheet">
            Your name:<br><input type="text" class="number" name="fullname" placeholder="Full Name:"><br>
            Email:<br> <input type="emamil" class="number" name="email" placeholder="Email:"><br>
            Password:<br><input type="password" class="number" name="password" placeholder="Password:"><br>
            Repeat Password:<br> <input type="password" class="number" name="repeat_password" placeholder="Repeat Password:"><br>
                <button name="submit" class="continue">Registration</button>
            </div>
        </form>
        <div class="left">
                <div class="logo"><img src="iitjlogo.png" alt=""></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil explicabo voluptatem debitis ratione totam ab ad molestiae dolorem rerum voluptates? Ipsam accusantium placeat delectus ullam velit non commodi totam asperiores.</p>
                <div class="login"><p>Already Registered <a href="login.php">Login Here</a></p></div>
            </div>
        </div>
    </div>
</body>
</html>