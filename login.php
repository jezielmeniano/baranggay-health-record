<?php
    
    session_start();
    include "dbconnect.php";

    $email = $password = "";
    $email_error = $password_error ="";
    $error_message="";
    $error = false;

    if(isset($_POST["login-button"])){
        
        $email = trim($_POST["email"]);
        $password = trim($_POST["password1"]);
       

    //validate

   
    if($email == ""){
        $email_error = "Please enter email";
        $error = true;
    }

    
    if($password == ""){
        $password_error = "Please enter password";
        $error = true;
    }
    

    if(!$error){
        $sql = "select * from users where email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $store_password = $row["password"];
            if(password_verify($password, $store_password)){
                $_SESSION['name'] = $row['name'];
                header("Location: dash.php");
            }
            else{
                $error_message = "Incorrect password";
            }
        }
        else{
            $error_message = "Email is not registered";
        }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
    <style>
        .text-danger {
            color: rgb(247, 112, 112); 
            font-size: smaller; 
            padding-top: 10px; 
            position: absolute;
            bottom: -19px; 
        }

        .input1, .input2 {
            margin-bottom: 25px;
            position: relative;
    }

    </style>
</head>
<body>
    <header></header>
     <main>
        <div class="container">

            <?php
                if(!empty($error_message)){ ?>
                    <div class="alert-danger">
                        <?= $error_message; ?>
                    </div>
            
            <?php  } ?>
            
            <form action = "" method="post">
            <div>
                <img src="logocross.png" height="60px">
            </div>
            <div>
                <h2>Login</h2>
            </div>

            <div class="input1">
                    <input type="text" id="email" name="email" placeholder="Enter email" value= "<?= $email?>">
                    <div class="text-danger"><?=$email_error?></div>
            </div>

            <div class="input2">
                    <input type="password" id="password1" name="password1" placeholder="Enter password">
                    <div class="text-danger"><?=$password_error?></div>
            </div>
            
            <div class="button">
                <button class="buttonadd" name = "login-button">Login</button>
            </div>

            <div>
               <a href="registration.php">Don't have an account? Sign up</a>
            </div>
            </form>
        </div>
        
        
    </main>
</body>
</html>