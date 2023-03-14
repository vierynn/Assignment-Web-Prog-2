<?php
    if($a <= 49):
        echo "E";
    elseif($a >= 50 && $a < 64 ):
        echo "D";
    elseif($a >= 65 && $a <= 69 ):
        echo "C";
    elseif($a >= 70 && $a <= 74 ):
        echo "B-";
    elseif($a >= 75 && $a <= 79 ):
        echo "B";
    elseif($a >= 80 && $a <= 84 ):
        echo "B+";
    elseif($a >= 85 && $a <= 89 ):
        echo "A-";
    elseif($a >= 90 && $a <= 100 ):
        echo "A";
    endif;
?>