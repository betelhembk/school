<?php
mysql_connect('localhost', 'betty', '123');
mysql_select_db('school_db');

$username     = $_POST['username'];
$password     = $_POST['password'];



mysql_query("INSERT INTO booking(`username`,`password`) 
VALUES('$username','$password')");
header('Location:shool.php')
?>