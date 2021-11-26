<?php

    class Produk {
        public  $judul ,
                $penulis,
                $penerbit,
                $harga,
                $jmlhalman,
                $waktumain,
                $tipe;

    // Pembuatan Constractor
    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalman = 0, $waktumain =0,$tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalman = $jmlhalman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    // Penggunaan Methods
    // nial lagusng di kembalikan lewat retrun tanpa mendeklarasikan varibal'nya
    // public function getlebel() {
    //     return "$this->penulis, $this->penerbit";
    // }

    public function getlebel() {

        $str2 = "{$this->penulis} | {$this->penerbit}";
        
        return $str2;
    }

    //jika kita tidak mengunakan metode inheritance kita harus malakukan penambahan properti
    //untuk bisa membuat protperti baru dan akan merubah susunan dari properti class itu sendiri 
    public function getinfolengakp(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getlebel()} (Rp. {$this->harga})";
        if($this->tipe == "komik"){
            $str .= " {$this->jmlhalman} Halaman.";
        }else if($this->tipe == "game") {
            $str .= " {$this->waktumain} Jam.";
        }

        return $str;

    }

    }

    // type object adalah agar class yang menerima inputan hanya bisa menerima data dari
    // class yang di masukan sebagai contoh class CetakInfoProduk hanya menerima inputan dari 
    // class Produk karna menambahkan kelas di belakang setelah parameter itu bertai parameter\
    // yang akan di masukan hanya bisa dari class produk selain itu pasti akan error
    class CetakInfoProduk{
        public function cetak (Produk $barang){
            $str = "{$barang->judul} | {$barang->getlebel()} ( Rp. {$barang->harga})";
            return $str;
        }

    }

    


    $produk3 = new Produk("Naruto", "Masashi Kishimoto","Shonen Jump",30000,100,0,"komik");
    $produk4 = new Produk("God Of War","Rome Humen","Sony Computer",90000,0,50,"game");

    echo $produk4->getinfolengakp();
    echo "<br>";
    echo $produk3->getinfolengakp();



?>