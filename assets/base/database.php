<?php
$connection = mysql_connect ( "localhost" , "root" , "" ) ;
if(!$connection){
    die( ' Could not connect : ' . mysql_error());
}
$db = mysql_select_db("phoneBook");
