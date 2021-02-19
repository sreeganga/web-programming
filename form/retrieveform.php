<html>
<head>
<title>retrive data</title>
</head>
<body bgcolor="lightpink">
<form action="main.html"method="post">
<center>
<?php
include 'conn1.php';
$sql = "SELECT * FROM  tab";
$result=mysqli_query($conn,$sql);
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
?>
<br><br>
<table border="2">
<tr>
<th>Id</th>
<th>Name</th>
<th>Password</th>
<th>Gender</th>
<th>Email</th>
<th>Phonenumber</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["NAME"]; ?></td>
<td><?php echo $row["PASSWORD"]; ?></td>
<td><?php echo $row["GENDER"]; ?></td>
<td><?php echo $row["EMAIL"]; ?></td>
<td><?php echo $row["PHONENUMBER1"]; echo $row["PHONENUMBER2"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else
{
echo "No result found";
}
?>
<br>
<br>
<input type="submit" value="back to home page" name="submit">
</center>
</form>
</body>
</html>