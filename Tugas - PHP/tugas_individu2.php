<?php
     echo "<table border='1'>";
     echo "<thead bgcolor='blue'>";
         echo "<th>No</th>";
         echo "<th>Nama</th>";
         echo "<th>Kelas</th>";
     echo "</thead>";
     echo "<tbody>";
         for ($no=1, $nama = 1, $kelas = 10; $no <= 10, $nama <= 10, $kelas >= 1; $no++ ,$nama++ , $kelas--) { 
             echo "<tr>";
                 echo "<td>$no</td>";
                 echo "<td>Nama Ke - $nama</td>";
                 echo "<td>Kelas $kelas</td>";
             echo "</tr>";  
         }
     echo "</tbody>";
     echo "</table>";
?>
