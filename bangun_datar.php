<?php
    //1. Luas Persegi 
    $sisi = 4;
    echo "Luas Persegi ( L = s*s; s = 4 ) adalah ".$sisi*$sisi."<br><br>";

    //2. Luas Persegi Panjang
    $panjang = 8;
    $lebar = 4;
    echo "Luas Persegi Panjang ( L = p*l; p = 8, l=4 ) adalah ".$panjang*$lebar."<br><br>";

    $alas = 6;
    $tinggi = 4;
    //3. Luas Jajar Genjang
    echo "Luas Jarjar Genjang ( L = a*t; a=6, t=4 ) adalah ".$alas*$tinggi."<br><br>";

    //4. Luas Segitiga
    echo "Luas Segitiga ( L = 1/2*a*t ) adalah ".(1/2*$alas*$tinggi)."<br><br>";

    //5. Luas Layang - Layang
    $d1 = 4;
    $d2 = 8;
    echo "Luas Layang - Layang ( L = 1/2*d1*d2; d1=4,d2=8 ) adalah ".$d1*$d2."<br><br>";
?>