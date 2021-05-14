<?php

$name = trim($_POST['name']);
$password = trim($_POST['password']);

if ( $name == "Peter" ){
    if ( $password == "ab123" ){
        echo "登入成功！";
    } else {
        echo "登入失敗！";
    }
} else {
    echo "登入失敗！";
}

?>