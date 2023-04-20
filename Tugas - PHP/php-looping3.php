<?php
    for ($i=0; $i < 9 ; $i++) { //inisialisasi adalah 0, loop dimulai dari nilai i yaitu 0 kemudian melakukan pengecekan dengan kondisi apakah nilai i < 9, jika kondisi benar maka akan menjalankan inner loop atau for yang berada didalam , kemudian terjadi proses increment.
        for ($j=0; $j <= $i ; $j++) { //inisialisasi adalah 0, loop dimulai dari j yaitu 0 kemudian melakukan pengecekan dengan kondisi apakah nilai j lebih kecil dari nilai i pada outer loop, jika kondisi benar makan akan mencetak nilai j, kemudian increment dan looping kembali smpai memenuhi kondisi akhir j <= i 
            echo "$j";//mencetak nilai j
        }
        echo "<br>"; //mencetak baris
    }
?>