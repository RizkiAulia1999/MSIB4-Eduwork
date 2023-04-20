<?php
    for ($i=9; $i >= 1 ; $i--) { //inisialisasi adalah 9, loop dimulai dari nilai i yaitu 9 kemudian melakukan pengecekan dengan kondisi apakah nilai i >= 1, jika kondisi benar maka akan menjalankan inner loop atau for yang berada didalam , kemudian terjadi proses decrement.
        for ($j=1; $j <= $i ; $j++) { //inisialisasi adalah 1, loop dimulai dari j yaitu 1 kemudian melakukan pengecekan dengan kondisi apakah nilai j lebih kecil dari nilai i pada outer loop, jika kondisi benar makan akan mencetak nilai j, kemudian increment dan looping kembali smpai memenuhi kondisi akhir j <= i 
             echo "*"; //mencetak bintang
        }
        echo "<br>";//mencetak baris
    }
?>