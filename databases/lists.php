<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <tr>
        <?php

            require_once "connections.php";

            $runSQL = $db->prepare("SELECT * FROM connects;");
            $runSQL->execute();
            foreach ($runSQL as $value){
                printf("<td>%f</td>",$value);
            }
        ?>
        </tr>
    </table>

</body>
</html>


