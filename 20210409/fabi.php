<?php

function fabi($i){
    if ($i == 0) return 0;
    if ($i == 1 ) return 1;

    return fabi($i-1)+fabi($i-2);
}

print(fabi(10));
?>