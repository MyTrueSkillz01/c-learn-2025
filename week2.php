<?php
 
 $nama = "Ihsan Dwika Putra";
 $umur = 19;
 $uangSaya = 200000000.67;
 $sudahMakanBelum = true;
 $hobi = ["Makan", "Tidur", "Belajar"];

 echo "Namaku: " . $nama, "<br>Umur saya: " . $umur, "<br>Uang saya: Rp" . $uangSaya;
 echo "<br>Sudah makan atau belum? ";

 if($sudahMakanBelum == true){
    echo "Aku sudah makan";
 }else{
    echo "Aku belum makan";
 }

 foreach ($hobi as $key => $value) {
    echo "<br>Hobi ke-" . $key . " Saya adalah: " . $value;
 }