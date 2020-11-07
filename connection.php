<?php
	//development connection
    //$con=mysqli_connect('localhost','root','','demo');
	//remote connection
	$con=mysqli_connect('remotemysql.com','PpSuXQTkqM','nyaPj3LQlP','PpSuXQTkqM');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>