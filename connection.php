<?php
	//development connection
    	//$con=mysqli_connect('localhost','root','','demo');
	//remote connection
	//$con=mysqli_connect('remotemysql.com','PpSuXQTkqM','nyaPj3LQlP','PpSuXQTkqM');
	//remote connection 2
	$db_port        = '3306';
	$con = mysqli_connect('sql6.freesqldatabase.com', 'sql6504121', 'vAUQ4ICbZm', 'sql6504121', $db_port)

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
