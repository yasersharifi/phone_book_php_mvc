<?php
include_once "database.php";

$item = $_POST['item'];

$query = "select * from persons where firstName LIKE '%$item%' or lastName LIKE '%$item%' or numbers LIKE '%$item%' or groupName LIKE '%$item%'";
$result = mysql_query($query);

if(!$result){
    echo "error in exe query";
}else{
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
<?php
}