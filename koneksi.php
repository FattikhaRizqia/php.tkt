<?php
$conn=mysqli_connect('localhost:8111','root','','tike');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>


