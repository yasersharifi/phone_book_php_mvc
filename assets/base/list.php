<?php
include_once "database.php";

$query = "select * from persons";
$result = mysql_query($query);



?>

<table border="1">
    <thead>
        <th>first name</th>
        <th>last name</th>
        <th>number</th>
        <th>group Name</th>
    </thead>
    <tbody>
    <?php
    while($row = mysql_fetch_assoc($result)){
        echo "<tr>";
            echo "<td>".$row['firstName']."</td>";
            echo "<td>".$row['lastName']."</td>";
            echo "<td>".$row['numbers']."</td>";
            echo "<td>".$row['groupName']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>