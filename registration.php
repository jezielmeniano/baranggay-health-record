<?php
    include "dbconnect.php";

    $name = $email = $password = $retypepassword = "";
    $name_error = $email_error = $password_error = $retypepass_error ="";

    $error = false;

    if(isset($_POST["signup-button"])){
        $name = trim($_POST["fullname"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password1"]);
        $retypepassword = trim($_POST["password2"]);

    //validate

    if($name == ""){
        $name_error = "Please enter name";
        $error = true;
    }
    if($email == ""){
        $email_error = "Please enter email";
        $error = true;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "Invalid Email Format";
        $error = true;
    }
    else{
        $sql = "select * from users where email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $email_error = "Email Already Registered!";
        }
    }
    if($password == ""){
        $password_error = "Please enter password";
        $error = true;
    }
    if($retypepassword == ""){
        $retypepass_error = "Please enter retype password";
        $error = true;
    }

    if($password != "" && $retypepassword != ""){
        if($password != $retypepassword){
            $retypepass_error = "Password do not match!";
            $error = true;
        }
    }

    if(!$error){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "insert into users (name, email, password) values (?, ?, ?)";

       
            $stmt = $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss",$name, $email, $password);
            $stmt->execute();
            header("Location: login.php");

    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="sign.css">
    <style>
        .text-danger {
            color: rgb(247, 112, 112); 
            font-size: smaller; 
            padding-bottom:8px;
        }

    </style>
</head>
<body>
    <header>
        
    </header>

    <main>
        <div class="container">


            <div class="container1">
                <img src="profile.png" height="400px">
            </div>
            
            <div class="container2">

                <form action="" method="post">
                
                    <div>
                        <h2>Admin Registration</h2>
                    </div>

                    <div>
                        <label for="fullname">Fullname</label><br>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter fullname" value= "<?= $name?>">
                        <div class="text-danger"><?=$name_error?></div>
                    </div>
                        

                    <div>
                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" placeholder="Enter email" value= "<?= $email?>">
                        <div class="text-danger"><?=$email_error?></div>
                    </div>

                    <div>
                        <label for="password1">Password</label><br>
                        <input type="password" id="password1" name="password1" placeholder="Enter password">
                        <div class="text-danger"><?=$password_error?></div>
                    </div>

                    <div>
                        <label for="password2">Re-type Password</label><br>
                        <input type="password" id="password2" name="password2" placeholder="Retype password">
                        <div class="text-danger"><?=$retypepass_error?></div>
                    </div>

                    <div class="button">
                        <button name="signup-button">Sign Up</button>
                    </div>

                    <div>
                        <a class="style" href="login.php">Already Registered? Login Now!</a>
                    </div>
                </form>
            </div> 
        </div>
    </main>
</body>
</html>
