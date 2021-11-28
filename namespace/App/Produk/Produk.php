<?php
        abstract class Produk {
            protected  $judul ,
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
        abstract public function getinfolengakp();
        
        abstract public function getinfo();
    
        }
    
?>