<?php 

    $str = " Raihan Rony ";
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++){
        if($str[$i] == ' ')
            echo "whitespace<br>";
        else
            echo"$str[$i]<br>";
    }
?>