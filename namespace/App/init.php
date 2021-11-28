<?php

    spl_autoload_register(function($class){
        // explode adalah fungsi untuk memecah string berdasarkan parameter yang di gunakan 
        $class = explode('\\',$class);
        $class = end($class);
        require_once 'Produk/' . $class .'.php';

    });

    spl_autoload_register(function($class){
          // explode adalah fungsi untuk memecah string berdasarkan parameter yang di gunakan 
          $class = explode('\\',$class);
          $class = end($class);
        require_once 'Service/' . $class .'.php';

    });

?>