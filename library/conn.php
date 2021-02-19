<?php
$servername='localhost';
$title='root';
$authorname='';
$dbname= "LIBMGNT";
$conn=mysqli_connect($servername,$title,$authorname,$dbname);
if(!$conn)
{
die('could not connect My Sql:' .mysql_error());
}
else
{
echo "database connected";
}
?>