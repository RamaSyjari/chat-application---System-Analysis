<?php
$con = mysqli_connect("localhost","root","", "prog");
	if (!$con)
		{die('Could not connect: ' . mysqli_error());}
	$q=mysqli_query($con,"SELECT username,message FROM messages ORDER BY mid DESC LIMIT 30");
	if(! $q )
		{die('Could not get data: ' . mysqli_error());}
	while($row=mysqli_fetch_array($q))
	{echo $row['username'].": ".$row['message']."<br/>";}
?>