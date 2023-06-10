<?php
// session_start();

$title = 'login';
require('functions.php');

$conn = mysqli_connect('localhost', 'root', '', 'tubes_pw23') or
   die('KONEKSI KE DATABASE GAGAL!');

if (isset($_POST["submit"])) {
   $username = $_POST["username"];
   $password = $_POST["password"];
   $login = mysqli_query($conn, "SELECT * FROM login_account WHERE username = '$username'");
   $cek = mysqli_num_rows($login);
   if ($cek > 0) {
      $data = mysqli_fetch_assoc($login);
      if ($data['level'] == "admin") {
         $_SESSION['username'] = $username;
         $_SESSION['level'] = "admin";
         header("Location: admin.php");
      } else if ($data['level'] == 'user') {
         header("Location: index.php");
      } else {
         $error = true;
      }
   }
}
?>
<?php if (isset($error)) :  ?>
   <script>
      alert("Username/password salah")
   </script>
<?php endif; ?>

<?php require('views/login.view.php'); ?>