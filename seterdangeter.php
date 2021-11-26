<?php

use Produk as GlobalProduk;

class Produk {
        private  $judul ,
                $penulis,
                $penerbit,
                $diskon,
                $harga;
                

    // Pembuatan Constractor
    public function __construct($judul, $penulis, $penerbit, $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setjudul($judul){
        if(!is_string($judul)){
            throw new Exception("judul harus string");
        }
        
        $this->judul = $judul;
    }

    public function getjudul() {
        return $this->judul;
    }

    public function setpenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getpenulis(){
        return $this->penulis;
    }

    public function setpeneribit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getpenernit(){
        return $this->penerbit;
    }

    public function setharga($harga){
        $this->harga = $harga;
    }

    public function getharga(){
       $total = $this->harga - ($this->harga * $this->diskon/100);

       return $total;
    }

      public function setdiskon($diskon){
        $this->diskon = $diskon;
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
        $str = "{$this->judul} | {$this->getlebel()} (Rp. {$this->harga})";
       

        return $str;

    }

    }


    class Komik extends Produk{
        public $jmlhalman;

        public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalman) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlhalman = $jmlhalman;
        }

        public function getinfokomik(){
            $str = "Komik : " . parent::getinfolengakp() . " - {$this->jmlhalman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk{
        public $waktumain;

        public function __construct( $judul, $penulis, $penerbit, $harga,$waktumain){
            parent::__construct( $judul, $penulis, $penerbit, $harga);
            $this->waktumain = $waktumain;
        }

   

        public function getinfogame(){
            $str = "Game : " . parent::getinfolengakp() . " - {$this->waktumain} Waktu Main Game.";
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

    


    $produk3 = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump",30000,100,0,"komik");
    $produk4 = new Game("God Of War","Rome Humen","Sony Computer",90000,0,50,"game");

    echo $produk4->getinfogame();
    echo "<br>";
    echo $produk3->getinfokomik();
    echo "<hr>";
    echo $produk4->setdiskon(50);
    echo $produk4->getharga();
    echo "<hr>" ;
    $produk4->setjudul("judulcoba");
    echo $produk4->getjudul();
    echo "<br>";
    $produk4->setpenulis("penulis baru");
    echo $produk4->getpenulis();
    echo "<br>";
    $produk4->setpeneribit("penerbit baru");
    echo $produk4->getpenernit();
    $produk4->setharga(300000);
    echo "<br>";
    echo $produk4->getharga();



?>