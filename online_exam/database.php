<?php
$cn=mysqli_connect("localhost","root","","quiz") or die("Could not Connect My Sql");
mysqli_select_db($cn,"quiz")  or die("Could connect to Database");
?>
