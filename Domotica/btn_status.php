<?php
$pin = $_POST['pin'];
$status=shell_exec("gpio -g read $pin ");
echo $status;
?>
