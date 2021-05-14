<?php
    require_once "connections.php";

    if (is_null($_POST['name'])){
        echo "<script>alert('退出!');history.back();</script>";
    }
    if (!(is_null($_POST['phone']))){
        $phone = trim($_POST['phone']);
        $name = trim($_POST['name']);
        $runSQL = $db->prepare("UPDATE connects SET phone = ? where name = ?;");
        $runSQL->execute(array($phone,$name));
    }
     
    if (!(is_null($_POST['email']))){
        $email = trim($_POST['email']);
        $name = trim($_POST['name']);
        $runSQL = $db->prepare("UPDATE connects SET email = ? where name = ?;");
        $runSQL->execute(array($phone,$name));
    }

    echo "<script>alert('退出!');history.back();</script>";


?>