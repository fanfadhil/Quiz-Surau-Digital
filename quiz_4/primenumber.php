<?php
$num = 2 ;
while ($num < 1000 ) {
    $count=0;
    for ( $i=1;$i<=$num;$i++) {
        if (gmp_mod($num, $i)==0) {
            $count++;
        }
    }
    if ($count<3) {
    echo $num." , ";
    } $num=$num+1;
}
?>