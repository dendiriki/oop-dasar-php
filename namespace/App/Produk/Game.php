<?php
       class Game extends Produk implements Infoproduk{
        public $waktumain;

        public function __construct( $judul, $penulis, $penerbit, $harga,$waktumain){
            parent::__construct( $judul, $penulis, $penerbit, $harga);
            $this->waktumain = $waktumain;
        }

        public function getinfo()    {
            $str = "{$this->judul} | {$this->getlebel()} (Rp. {$this->harga})";
           
    
            return $str;
    
        }

   

        public function getinfolengakp(){
            $str = "Game : " . $this->getinfo() . " - {$this->waktumain} Waktu Main Game.";
            return $str;
        }
    }

?>