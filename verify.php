<?php
	$conn= mysqli_connect("localhost","root","","demo");
	if ($conn)
	{
		if (isset($_POST['submit']))
		{
			$user= $_POST['username'];
			$pass= $_POST['password'];
			$sql = "select password from login where username='$user'";
			$res = mysqli_query($conn,$sql);
			if(mysqli_num_rows($res))
			{
				$x = mysqli_fetch_assoc($res);
				if (password_verify($pass,$x['password']))
				{
					header("Location : Home.html");
				}
				else
				{
					header("Location : login.html");
				}
			}
			else
			{
				header("Location : login.html");
			}
		}
	}
	else{
		die("couldnt connect to database, try again later");
	}
?>