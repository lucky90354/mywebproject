<?php
$conn =mysql_connect('localhost','root','')or die(mysql_error());
$db=mysql_select_db('hostel2', $conn)or die(mysql_error());
?>