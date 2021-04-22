<?php

require_once "connections.php";

$id = intval(trim($_POST['id']));
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);

printf($id.$name.$email.$phone);

try {
  $runSQL = $db->prepare('INSERT INTO connects(id,name,email,phone) VALUES (?,?,?,?)');
  $runSQL->execute(array($id,$name,$email,$phone));
  $runSQL->fetchAll();
  printf ("Insert data success ...");

} catch (PDOException $e2) {
    printf("Could not connect to the database: %s ",$e2->getMessage());
}
    

?>