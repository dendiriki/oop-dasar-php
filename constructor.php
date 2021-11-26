<?php

    class Produk {
        public  $judul ,
                $penulis,
                $penerbit,
                $harga;

    // Pembuatan Constractor
    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Penggunaan Methods

    public function getlebel() {
        return "$this->penulis, $this->penerbit";
    }


    }

    


    $produk3 = new Produk("Naruto", "Masashi Kishimoto","Shonen Jump",30000);
    $produk4 = new Produk("God Of War","Rome Humen","Sony Computer",90000);

    echo "Komik :" . $produk3->getlebel();
    echo "<br>";
    echo "Game  :" . $produk4->getlebel();



?>