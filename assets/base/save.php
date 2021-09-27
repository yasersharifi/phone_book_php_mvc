<?php
include_once "database.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$groupName = $_POST['groupName'];

$query = "insert into persons VALUES ('','$firstName','$lastName','$phoneNumber','$groupName')";
$result = mysql_query($query);

if(!$result){
    echo "error in save into database";
}else{
    echo "person saved successfully";
}
?>
<br>
<a href="index.php">return</a>