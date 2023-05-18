<?php require ('partials/header.php');?>
<?php require ('partials/nav.php'); ?>
<style>
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
 
 </style>
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
    <?php require ('partials/footer.php') ; ?>