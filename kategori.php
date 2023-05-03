<?php
    //If - Else 
    $name = "Aulia";
    $height = 158/100;
    $weight = 50;
    $BMI = $weight / ($height * $height);
    if ($BMI < 18.5) {
        echo "Hallo saya $name. Nilai BMI adalah $BMI, termasuk Kurus";
    } elseif ($BMI >=  18.5 && $BMI <= 24.9){
        echo "Hallo saya $name. Nilai BMI adalah $BMI, termasuk Normal";
    } elseif ($BMI >=  25 && $BMI <= 29.9){
        echo "Hallo saya $name. Nilai BMI adalah $BMI, termasuk Gemuk";
    } else {
        echo "Hallo saya $name. Nilai BMI adalah $BMI, termasuk Obesitas";
    }
?>