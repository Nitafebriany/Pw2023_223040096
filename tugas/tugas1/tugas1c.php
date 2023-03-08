<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Tugas 1C</title>
  
  <style type="text/css">
   .container {
        display: flex;
    }
    .box {
        width: 70px;
        height: 70px;
        background-color: #CC9933;
        position: relative;
        border: 1px solid #000000;
    }
    .text-box{
        position: absolute;
        font-size: 20px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
  </style>   
  
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="text-box">1</div>
        </div>
    </div>
    
    <div class="container">
        <div class="box">
            <div class="text-box">2</div>
        </div>
        <div class="box">
            <div class="text-box">2</div>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="text-box">3</div>
        </div>
        <div class="box">
            <div class="text-box">3</div>
        </div>
        <div class="box">
            <div class="text-box">3</div>
        </div>
    </div>
</body>
</html>
