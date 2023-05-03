
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>
    <style type="text/css">
   :root {
        --primary:#d79922;
        --bg: #2c3531;
    }
   *{
        margin : 0;
        padding: 0;
        box-sizing: border-box;
        outline : none;
        border: none;
        text-decoration: none;
        font-family: 'Nanum Myeongjo', serif;
        
    }
    body {
        color : var(--bg);
        background-size: 100%;
        background-image: url('img/bg.jpg');
        background-repeat: no-repeat;
        align-items: center;
        position: center;
    }
    .navbar {
        display: flex;
        position: fixed;
        justify-content: space-between;
        align-items: center;
        padding: 0.3rem  4%;
        background-color: #2c3531;
        border-bottom: 1px solid #513c28;
        position: auto;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
    }
   .navbar .navbar-navbar1 {
       color:#ffff;
       font-size: 2rem;
       font-weight: 500;
       font-style: italic;
   }
    .navbar .navbar-navbar1 span {
        color: var(--primary);
        
        
    }
    .navbar .navbar-nav a {
    
    display: inline-block;
    font-size: 16px ;
    margin: 1rem;
    
    }
    .navbar .navbar-nav a:hover {
    color: var(--primary);
    }
    .navbar .navbar-nav a::after {
       content:'';
       display: block;
       padding-bottom: 0.5rem;
       border-bottom: 0.1rem solid var(--primary);
       transform: scaleX(0);
       transition: 0.2s linear;
    } 
    .navbar .navbar-nav a:hover::after {
        transform: scaleX(0.5);
    
    }
    .menu h2 {
        margin-bottom: 1rem;
    }
    .menu p {
        text-align: center;
        max-width: 30rem;
        margin: auto;
        font-size: 1rem;
        font-weight: 100;
        line-height: 1.6;
    }
    
    .navbar .navbar-extra a {
        color: #ffff;
        margin: 0 0.5rem;
    }
    .navbar .navbar-extra a:hover {
        color: var(--primary);
        
    }
   

    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        font-size: absolute;
        position: relative;
        
    }
    .content {
        font-size: 1rem;
    }
    .hero ::after {
        content: '';
        display: block;
        position: absolute;
        width: 100%;
        height: 40%;
        bottom: 0;
        background: linear-gradient(0deg, rgba(255, 255, 0)8% );
    }
        
    .hero .content {
        padding: 7% 8%;
        margin: 4% 6%;
    }
    .hero .content h1 {
        position: relative;
        justify-content: center;
        align-items: center;
        height: 100%;
        font-size: 10rem;
        letter-spacing: 1.5rem;
        color: #2c3531;
        text-shadow: 1px 1px 3px rgba(1,1, 3, 0,5%);
        
    }
    
    .hero .content p {
        justify-content: center;
        align-items: center;
        height: 100%;
         font-size: 2rem;
         text-align: center;
         margin-top: 2rem;
        color: #2c3531; 
       
    }
    .kuliner .content .cta {
        jusify-content: center;
        display: inline;
        padding: 1rem;
        font-size: 1.4rem;
        color: #fff;
        background-color: var(--primary);
        border-radius: 0.5rem;
        margin: 40% 40%;
        
    }
        
    .sejarah ,
    .kuliner {
    padding : 5rem;
    margin-top: 1px;
    background-color: #c5cbe3;
    }
    .sejarah h2,
    .kuliner h2 {
        text-align: center;
        font-size: 3rem;
        margin-bottom: 3rem;
        
    }
    .sejarah h2 span,
    .kuliner h2 span {
        color : var(--primary);
    }
    .sejarah .row {
        display: flex;
    }
    .sejarah img {
     flex: 1 1 20
     height: 20rem;   
     width: 20rem;
    }
    .sejarah .content {
        flex : 1 1 35rem;
        padding: 0.1rem;
        text-align: left;
        font-size: 2rem;
        
    }
    .sejarah p {
        text-align: left;
        font-size: 1.5rem;
       
    }

 .sejarah .content p,
 .kuliner .content p {
    margin-bottom: 10rem;
    font-size: 1.3rem;
    font-weight: 100;
    line-height: 1.5;
    padding-left: 1rem;
 }
 
 footer {
    background-color: var(--bg);
    text-align: center;
    padding: 1rem 3rem;
    margin: auto;
    font-family: 
}

footer .contact {
    padding: 2rem 0;
}

footer .contact a{
    color:   #c5cbe3;
    margin: 2rem;
}

footer .contact a:hover {
    color:  var(--primary);
}

footer .credit {
    font-size : 1rem;
}
footer .credit p{
    color:   #c5cbe3;
    margin-top: 1rem;
}

 
        @media screen (max-width: 1360px) {
        .html {
        font-size: 100%;    
        }
        }
        
        @media screen and (max-width: 768px) {
        .html {
        font-size: 62.5%;    
        }
       
       .navbar .navbar-nav {
        position: absolute;
        top : 100%;
        right: -100%;
        background-color: black;
        width: 30rem;
        height: 100vh;
        }
        .navbar .navbar-nav.active {
         right: 0;
        }
       } 
        @media (max-width: 450px) {
        html {
        font-size: 55%;    
        }
        }
    
    </style>
</head>
<body>
<nav class="navbar">
    <div class="navbar-navbar1">
<a href="#" class="navbar-logo"><span>Travel</span> 
in 
<span>Yogyakarta</span></a>
</div>
    
    <div class="navbar-nav">
    <a href= "#" > Home </a>
    <a href=""> see&do </a>
    <a href="#kuliner"> kuliner </a>
    <a href="wisata.php"> Destinasi</a>

</div>
    </nav>
    <section class="hero" id="Home">
    <main class="content">
        <h1>Yogyakarta</h1>
        <p>Let's Start your best journey in Yogyakarta
        </p>

    </main>
    </section>

    <section class="sejarah" id="sejarah">
    <h2><span>Sugeng Rawuh Ing Yogyakarta</span><br>
    </h2>
    <div class="row">
    <div class="about-img">
    <img src="img/temple.jpg " alt="Sejarah">
    </div> 
    <div class="content">
        <p> Yogyakarta atau yang biasa kita kenal dengan sebutan jogja adalah ibu kota daerah sekaligus sebagai pusat pemerintahan dan perekonomian.
        <br>Yogyakarta juga disebut sebagai daerah istimewa karena hingga kini masih berbentuk kerajaan yang dipimpin oleh Sultan.<br>
        Kota ini adalah kota besar yang masih mempertahankan konsep tradisonal dan budaya Jawa.
        Daerah Istimewa Yogyakarta adalah Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan dari Negara Kesultanan Yogyakarta dan Negara Kadipaten Paku Alaman.Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa, dan berbatasan dengan Provinsi Jawa Tengah dan Samudra.
<br>Yogyakarta memiliki keistimewaan lain berupa kota dengan banyak warisan budaya dan bangunan bersejarah
Banyak budaya yang ada di Yogyakarta yang menjadi ciri khas kota tersebut, seperti kesenian membatik, Sekaten, Sendratari Ramayana, Labuhan, dan wayang kulit.
Selain itu, Yogyakarta juga terkenal dengan julukan Kota Pelajar saking banyaknya kampus dan institusi pendidikan tinggi yang menjadi tempat menuntut ilmu bagi mahasiswa dari seluruh Indonesia.</p> 
    </div>
    </div>
    </section>
    <section class="kuliner" id="kuliner">
        <h2><span> kuliner </span> Khas</h2>
        <div class="content">
        <p>Yogyakarta juga dikenal kuliner kuliner nya, berikut beberapa kuliner khas yogyakarta yang bisa anda jadikan referensi oleh oleh atau yang bisa anda santap ketika anda berkunjung ke yogyakarta </p>
        <a href="kuliner.php" class="cta">Selengkapnya</a>
    </div>
    </section>

    <footer>
        <div class="contact">
            <a href="#"><li data-feather="instagram"></li></a>
            <a href="#"><li data-feather="twitter"></li></a>
            <a href="#"><li data-feather="facebook"></li></a>
            <a href="#"><li data-feather="phone"></li></a>
        </div>
       <div class="credit">
        <p>Credit Nita febriany &copy;2023.</p>
       </div>
    </footer>
<script>
      feather.replace()
    </script>

    
</body>
</html>