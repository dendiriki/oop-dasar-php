<?php
    
    // class Contohstatic{
    //     public static $angkat = 1;

    //     public static function halo(){
    //         return "halo" . self::$angkat++ . " kali";
    //     }
    // }

    // echo Contohstatic::$angkat;
    // echo "<br>";
    // echo Contohstatic::halo();
    // echo "<hr>";
    // echo Contohstatic::halo();


    class Contoh{
        public static $nomer = 1;

        public function hai(){ 
            return "Halo " . self::$nomer++ . " kali berepa. <br>";
        }

    }

    $obj = new Contoh();
    echo $obj->hai();
    echo $obj->hai();
    echo $obj->hai();

    echo "<hr>";

    $obj2 = new Contoh();
    echo $obj2->hai();
    echo $obj2->hai();
    echo $obj2->hai();

    // yang satu pakek static yang satu gak pakai static 
    // dan akan di pisah dengan dobel hr

    echo "<hr>";
    echo "yang atas pakai static yang bawah tidak pakai static untuk propertinya";
    echo "<hr>";


    class Contoh2{
        public  $nomer2 = 1;

        public function hai2(){ 
            return "Halo " . $this->nomer2++ . " kali berepa. <br>";
        }

    }

    $obj3 = new Contoh2();
    echo $obj3->hai2();
    echo $obj3->hai2();
    echo $obj3->hai2();

    echo "<hr>";

    $obj4 = new Contoh2();
    echo $obj4->hai2();
    echo $obj4->hai2();
    echo $obj4->hai2();
    



?>