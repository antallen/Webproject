<?php
    require_once "connections.php";

    if (is_null($_POST['name'])){
        echo "<script>alert('退出!');history.back();</script>";
    } else {
    
        $name = trim($_POST['name']);
        $runSQL = $db->prepare("DELETE FROM connects where name = ?;");
        $runSQL->execute(array($name));
    }

    echo "<script>alert('退出!');history.back();</script>";


?>