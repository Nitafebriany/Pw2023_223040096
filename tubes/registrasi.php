<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
    </head>
   
    <body>
        <div class="container">
          <h1>Registrasi</h1>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <label>Nomor Hp</label><br>
                <input type="Text"><br>
                <label>Email</label><br>
                <input type="Text"><br>
                <button type="submit" name="submit">Daftar</button>
            
            </form>
        </div>     
    </body>
</html>
<style>

body {
    height: 100vh;
    background-color: #c5cbe3;
    font-family: 'Nanum Myeongjo', serif;

}
.container { 
    position: fixed;
    transform: translate(-50%,-50%);
    padding: 30px 30px 30px 30px;
    width: 300px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 0 20px #4056a1;
}

.container h1 {
    text-align: center;
    font-size: 50px;
    color: #4056a1;
    
}
.container label{
    text-align: left;
    color: #4056a1;
    
}
.container form input {
    width: 90%;
    padding: 5px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 1.5px solid #062f4f;
    color: #000080;
    font-size: 15px;

}
.container form button{
    width: 100%;
    padding: 10px ;
    margin-top: 10px;
    border: none;
    background-color:#4056a1;
    font-size: 18px;
    color: #ffff;
}
.container a {
    font-size: 15px;
    margin-bottom: 100px;

}
    </style>
