<html>
    <head>
        <title>13519025-Pedia</title>
        <link href="13519025pedia.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <h1 class="judul"><u>13519025-Pedia</u></h1>
        <button class="shop"> Shop </button>
        <div class = "menu_table">
            <div class = "name_table">
                <div class = "nama_buku"><b>Nama Buku</b></div>
                <p>Untuk Apa Seni</p>
                <p>Warisan Sejarah Arianisme</p>
                <p>Sejarah Filsafat Kontemporer: Jerman dan Inggris</p>
                <p>Sejarah Filsafat Kontemporer: Prancis</p>
                <p>Semiotika dan Hipersemiotika</p>
                <p>Epistemologi Dasar</p>
                <p>Teori-Teori Etika</p>
            </div>
            <div class = "price_table">
                <div class = "harga_buku"><b>Harga</b></div>
                <p>Rp 60.000</p>
                <p>Rp 97.000</p>
                <p>Rp 70.000</p>
                <p>Rp 63.000</p>
                <p>Rp 120.000</p>
                <p>Rp 60.000</p>
                <p>Rp 96.000</p>
            </div>
            <div class = "thumbnail_table">
                <div class = "gambar"><b>Gambar</b></div>
                <a href = "./display.html?index=0"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1392706216l/20837627.jpg"></a>
                <a href = "./display.html?index=1"><img src="https://pustaka.iainbukittinggi.ac.id/wp-content/uploads/2018/12/arian-198x300.jpg"></a>
                <a href = "./display.html?index=2"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1551165807l/4309628._SX318_.jpg"></a>
                <a href = "./display.html?index=3"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1243418656l/6498943.jpg"></a>
                <a href = "./display.html?index=4"><img src="https://s2.bukalapak.com/img/7734600261/large/IMG_20170912_134621_scaled.jpg"></a>
                <a href = "./display.html?index=5"><img src="https://togamas.com/css/images/items/potrait/JPEGG_5905_Epistemologi_Dasar.jpg"></a>
                <a href = "./display.html?index=6"><img src="https://s2.bukalapak.com/img/2027491742/large/Buku_Teori_Teori_Etika_karya_Gordon_Graham.jpg"></a>
            </div>
        </div>
    </body>
</html>

<?php 
    session_start();
    if(!isset($_SESSION['UserData']['user'])){
        header("location:login.php");
        exit;
    }
?>