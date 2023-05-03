<?php 

if( isset( $_POST["submit"]) ) {
 if ( $_POST["username"] == "nita" &&  $_POST["password"] == "1023" )  {

    header("Location: admin.php");
    exit;

 } else {
    $error = true;
 }

}
?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <?php if( isset($error) ) :  ?>
        <p> Username/password salah </p>
        <?php endif; ?>

    <div class="login">
    <h1>Login</h1>
    <form action="admin.php" method="post">
                <label for="username">Username </label>
                <input type="text" name="username" id="username"><br>
    <label for="password">Password </label>
                <input type="password" name="password"  id="password"><br>
     <a href="#">Forgot password?</a><br>
    <button type="submit" name="submit">Login</button><br>
     <p>Don't have an account? <a href="registrasi.php">SignUp</a></p>
    </div>
    </form>
</body>
</html>
<style>

body {
    height: 100vh;
    background-color: #c5cbe3;
    font-family: 'Nanum Myeongjo', serif;

}
.login { 
    position: fixed;
    transform: translate(-50%,-50%);
    padding: 30px 30px 30px 30px;
    width: 300px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 0 20px #4056a1;
}

.login h1 {
    text-align: center;
    font-size: 50px;
    color: #4056a1;
    
}
.login label{
    text-align: left;
    color: #4056a1;
    
}
.login form input {
    width: 90%;
    padding: 5px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 1.5px solid #062f4f;
    color: #000080;
    font-size: 15px;

}
.login form button{
    width: 100%;
    padding: 10px ;
    margin-top: 10px;
    border: none;
    background-color:#4056a1;
    font-size: 18px;
    color: #ffff;
}
.login a {
    font-size: 15px;
    margin-bottom: 100px;

}
    </style>
