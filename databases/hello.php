<?php

require_once "connections.php";

$id = trim($_POST['id']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);

printf($id.$name.$email.$phone);
/*
$sql = 'INSERT INTO hello (id,name,email,phone) VALUES (?,?,?,?)';
$runSQL = $db->prepare($sql);
$runSQL = $db->exec(array($id,$name,$email,$phone));

printf ("Insert data success ...");
*/
?>