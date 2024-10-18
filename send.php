<?php
$con = mysqli_connect("localhost","root","", "prog");
if (!$con)
{die('Could not connect: ' . mysqli_error());}
$message=$_POST['message'];
$id=$_POST['id'];

$q=mysqli_query($con, "SELECT username FROM members where id='$id';");
while($row=mysqli_fetch_array($q))
{
	$username=$row['username'];
}
mysqli_query($con, "insert into messages (mid,uid,username,message) values(null,'$id','$username','$message');");
?>