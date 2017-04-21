<?php
$connection = mysqli_connect("localhost", "root", "", "gps");
if(mysqli_errno($connection)){
    echo "<h> Server is busy..Try again later!";
}