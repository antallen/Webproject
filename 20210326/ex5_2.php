<?php
//caculate the summary

function summary(...$numbers){
    $sum = 0;
    foreach($numbers as $i){
        $sum += $i;
    }
    return $sum;
}

$total = summary(1,3,5,7,23546,6784,6789,34634,2352);
printf("總計: %d", $total);

?>