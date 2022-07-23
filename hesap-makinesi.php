<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <style>
    * {
    box-sizing: border-box;
    }

    body {
        padding: 0%;
        margin: 0%;
        background-color: white;
        color: orange;
    }

    .container {
        position: absolute;
        width: 40%;
        left: 30%;
        top: 20%;
        background-color: black;
        border: 2px solid orange;
        border-radius: 5%;
        font-size: 30px;
    }

    p {
        color: orange;
        font-size: 20px;
    }

    .sonuc {
        position: absolute;
        top: 35%;
        left: 40%;
        border: 2px solid orange;
        border-radius: 10%;
    }

    </style>
    </head>

    <body>
        <div class="container">
            <form action="hesap-makinesi.php" method="GET">
                <div class="sm-container">    
                    SAYI 1 : <input type="text" name="sayi1" placeholder="Sayı Giriniz"> </br></br>
                    SAYI 2 : <input type="text" name="sayi2" placeholder="Sayı Giriniz"> </br>
                    </br> </br>
                    <input type="radio" name="group" id="carpma" value="carpma"> x </br>
                    <input type="radio" name="group" id="bolme" value="bolme">/ </br>
                    <input type="radio" name="group" id="cikartma" value="cikartma">- </br>
                    <input type="radio" name="group" id="toplama" value="toplama">+ </br>
                    <button type="submit" name="hesapla">HESAPLA</button>
                </div>
            </form>
        </div>
    </body>
</html>

<?php 

$sayi1 = $_GET["sayi1"];
$sayi2 = $_GET["sayi2"];

if($_GET["group"] == 'carpma') {
    ?><div class="sonuc"><p>İşlem Sonucu : </p><?php  echo $sayi1 * $sayi2 ?> </div> <?php
}

if($_GET["group"] == 'bolme') {
    ?> <div class="sonuc"><p>İşlem Sonucu : </p><?php echo $sayi1 / $sayi2; ?> </div> <?php
}

if($_GET["group"] == 'cikartma') {
    ?> <div class="sonuc"><p>İşlem Sonucu : </p><?php echo $sayi1 - $sayi2; ?> </div> <?php
}

if($_GET["group"] == 'toplama') {
    ?> <div class="sonuc"><p>İşlem Sonucu : </p><?php echo $sayi1 / $sayi2; ?> </div> <?php
}


?>