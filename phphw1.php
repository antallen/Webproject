<?php
    //這是註解，以下進行php程式碼輸出內容
    print("Hello, World!"."\n");
    print("This is a first program!"."\n");

    /*
    程式目的:以下程式列出今天日期
    程式日期:2021/03/12
    Author: antallen
    Version: 1.0
    */
    $_a123 = 123;
    $_A123 = "ZARDs";
    $Backet;
    $now = time();
    print date('Y-M-d H:i:s');
    sleep(5);
    $next = time();
    print "Travel Time: ".($next-$now)." seconds!"

       // 變數 a 沒宣告就使用,會產生 E_NOTICE 的警告
       echo '$a: '.$a.'<br />';
       $name = 100;
       echo '$name: '.$name.'<br />';
       $name = 'David';
       echo '$name: '.$name.'<br />';
       $a = $a + 100;
       echo '$a: '.$a.'<br />';
?>