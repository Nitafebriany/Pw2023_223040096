<?php require('partials/header.php');
require('partials/navbar.php');
?>
<div class="register-form">
    <div class="register">
        <h2>Sign Up</h2>
        <form action="registrasi.php" method="post">
            <div class="inputbox">
                <input name="username" type="text" placeholder="Username" autocomplete="off">
            </div>
            <div class="inputbox">
                <input name="password" type="password" placeholder="Password" autocomplete="off">
            </div>
            <div class="inputbox">
                <input name="nomor_hp" type="text" placeholder="No. Telp" autocomplete="off">
            </div>
            <div class="inputbox">
                <input name="email" type="email" placeholder="Email" autocomplete="off">
                <div class="bottom-content-register">
                    <input name="registrasi" type="submit" value="Login" id="btn-register">
                </div>
                <div class="bottom-content-register">
                    <a href="login.php">Sign In Now</a>
                </div>

        </form>

    </div>
</div>