<?php

    class Produk {
        public  $judul = "judul",
                $penulis,
                $penerbit,
                $harga;

                // Penggunaan Methods

    public function getlebel() {
        return "$this->penulis, $this->penerbit";
    }


    }

    //tambah property secara otomatis jika memasukan property yang tidak di kenali

    // $produk1 = new Produk();
    // $produk1->judul = "Naruto";
    // var_dump($produk1);

    // echo "<br>";

    // $produk2 = new Produk();
    // $produk2->judul = "God of War";
    // $produk2->tambahproperty = "tambah Property ";
    // var_dump($produk2);


    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Massashi Kishimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = 30000;


    $produk4 = new Produk();
    $produk4->judul = "God Of War";
    $produk4->penulis = "Orang tidak di kenal";
    $produk4->penerbit = "Sony Computer";
    $produk4->harga = 90000;

    echo "Komik :" . $produk3->getlebel();
    echo "<br>";
    echo "Game  :" . $produk4->getlebel();



?>