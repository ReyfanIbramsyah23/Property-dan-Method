<?php

class manusia{
    var $nama;
    var $warna;
    
    function tampilkan_nama(){
        return "Nama saya Reyfan Ibramsyah <br/>";
    }
    
    function rombel(){
        return "Dari Rombel RPL XI-4 <br/>";
    }
    
}

$manusia = new manusia();
 

echo $manusia->tampilkan_nama();
 

echo $manusia->rombel();