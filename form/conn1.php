<?php
$servername='localhost';
$username='root';
$password='';
$dbname= "tab";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect My Sql:' .mysql_error());
}
else
{
echo "database connected";
}
?>