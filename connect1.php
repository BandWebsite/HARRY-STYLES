<?php
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$pass=base64_encode($pass);
echo "$uname ";
//$conn = mysqli_connect("localhost","root", "", "demo");
//$conn=mysqli_connect('remotemysql.com','PpSuXQTkqM','nyaPj3LQlP','PpSuXQTkqM');
$db_port        = '3306';
$conn = mysqli_connect('sql6.freesqldatabase.com', 'sql6504121', 'vAUQ4ICbZm', 'sql6504121', $db_port)
if($conn){
	echo "Connection Successful";
	echo "<br>";
}
else{
	die("Connection Unsuccessful");
}
$query = $conn->prepare("INSERT into login(username,fname,lname,password) values(?,?,?,?)");
$query->bind_param("ssss",$uname,$fname,$lname,$pass);
$query->execute();
echo "Successfully registered";
mysqli_close($conn);
?>
<br><br>
<a href="index.php"><h3>LOGIN HERE</h3></a>
