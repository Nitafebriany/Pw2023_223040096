<?php require('partials/header.php');
require('partials/navbar.php');
?>
<div class="login-form">
    <div class="login">
        <h2>Sign In</h2>
        <form action="login.php" method="post">
        <div class="inputbox">
            <input  name="username" type="text" placeholder="Username" autocomplete="off" required>
        </div>
        <div class="inputbox">
            <input name="password" type="password" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="bottom-content">
            <input name="submit" type="submit" value="Login" id="btn" required>
        </div>

        <div class="bottom-content">
            <a href="registrasi.php">Don't have account?</a>
        </div>

        </form>

    </div>
</div>