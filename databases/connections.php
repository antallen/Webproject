<?php
//測試連線是否正常
try {

   $db = new PDO('mysql:host=172.17.0.2;dbname=hello','peter','World123');
   if (isset($db)) printf("Connection Success");
} catch(PDOException $e) {
    printf("Could not connect to the database: %s ",$e->getMessage());
}
?>