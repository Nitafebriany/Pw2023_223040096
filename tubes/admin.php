<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dashboard Admin</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body>
    <div class="Admin">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

          </button>
          <a class="navbar-brand" href="#">Travel <span>in</span> Yogyakarta</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="#"> Home</a></li>
            <li><a href="registrasi.php">Registration</a></li>
            <li><a href="login.php"> Log out</a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
          <p>
            DASHBOARD ADMIN
        </div>
      </section>

    
    </body>
</html>
<style>
    body{
      font-family: 'Nanum Myeongjo', serif;
      background-color: #c5cbe3; 
}
.Admin a {
  font-size: 1.5rem;
  background-color:#00000;
}

.Admin {
	width: 100%;
	height: 100%;
  font-size: 3rem;
}
.navbar {
	margin-bottom: 0;
  
}
.sidebar{
	
	height: 100%;
	background: #4056a1;
	position: absolute;
	z-index: 100;
}
ul {
	padding: 0;
	margin-left: -40px;
    
}
ul li{
	list-style: none;
	border-bottom: 2px solid rgba(100, 100, 200, 0.5); 
}
ul li a{
	text-decoration: none;
	color: #aeb2b7;
	display: block;
	padding: 19px 0px 18px 25px;
	transition: all 200ms ease-in;
}
ul li a:hover{
	text-decoration: none;
	color: $eeeee;
}
ul li a:visited{
	text-decoration: none;
	color: #fff;
}

ul ul{
	display: none;
	margin:0px;
}
ul li a .fa-angle-down{
	margin-right: 10px;
}
/*apabila lebar min 768px*/
@media(min-width: 768px) {
	.sidebar{
		width: 240px;
	}
	.content{
		margin-left: 250px;
	}
	.inner{
		padding: 15px;
	}
}
</style>
