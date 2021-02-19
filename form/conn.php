<?php
$servername='localhost';
$title='root';
$authorname='';
$publisher='';
$quantity='';
$price='';
$dbname= "LIBMGNT";
$conn=mysqli_connect($servername,$title,$authorname,$quantity,$price,$dbname);
if(!$conn)
{
die('could not connect My Sql:' .mysql_error());
}
else
{
echo "database connected";
}
?>