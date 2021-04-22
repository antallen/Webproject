<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>    
        <?php

            require_once "connections.php";

            $runSQL = $db->prepare("SELECT * FROM connects;");
            $runSQL->execute();
            printf("<tr>");
            while ($row = $runSQL->fetch()){
                printf("<td>%d</td>",$row[0]);  
                printf("<td>%s</td>",$row[1]);
                printf("<td>%s</td>",$row[2]);
                printf("<td>%s</td>",$row[3]);
            }
            printf("</tr>");
        ?>
        
    </table>

</body>
</html>


