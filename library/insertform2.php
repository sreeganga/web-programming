<html>
<body bgcolor="yellowgreen">
<form action="main.html" method="post">
<center><br><br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$title = $_POST['Title'];
$Authorname=$_POST['AuthorName'];
$publishername=$_POST['PublisherName'];
$quantity=$_POST['Quantity'];
$price=$_POST['Price'];
$sql="INSERT INTO lib(Title,AuthorName,PublisherName,Quantity,Price)VALUES('$title','$Authorname','$publishername','$quantity','$price')";
if (mysqli_query($conn, $sql))
{
echo "New record created successfully!<br>";
}
else
{
echo  "Error is: ".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br>
<input type="submit"value="Backto home page"name="submit">
</center>
</body>
</html>
