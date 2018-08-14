<?php
$array = [5,4,3,2,1];
function binarySearch(int $value, array $array, int $start, int $end){
    if($end<$start) return;
    sort($array);
    
    $middle = floor(($end + $start)/2);
    if($array[$middle]==$value) return true;
    elseif ($array[$middle] > $value) return binarySearch($value, $array, $start, $middle-1);
    else return binarySearch($value, $array, $middle+1, $end);
}
$found = binarySearch(4 ,$array, 0, sizeof($array)-1);
if($found) echo "found";
else echo "not found";
?>