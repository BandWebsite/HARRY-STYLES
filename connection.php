<?php

    $con=mysqli_connect('localhost','root','','demo');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>