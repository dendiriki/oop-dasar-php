<?php

    require_once 'App/init.php';


    $produk3 = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump",30000,100,0,"komik");
    $produk4 = new Game("God Of War","Rome Humen","Sony Computer",90000,0,50,"game");




    

   $cetakproduk = new CetakInfoProduk();
   $cetakproduk->tambahproduk($produk4);
   $cetakproduk->tambahproduk($produk3);
   echo $cetakproduk->cetak();
   new Coba();

?>