<?php
    
    class Komik extends Produk implements Infoproduk{
        public $jmlhalman;

        public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalman) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlhalman = $jmlhalman;
        }

        public function getinfo()    {
            $str = "{$this->judul} | {$this->getlebel()} (Rp. {$this->harga})";
           
    
            return $str;
    
        }

        public function getinfolengakp(){
            $str = "Komik : " . $this->getinfo() . " - {$this->jmlhalman} Halaman.";
            return $str;
        }
    }
?>