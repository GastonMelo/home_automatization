<?php 
$setmode_4=shell_exec("gpio -g mode 4 out");
$setmode_17=shell_exec("gpio -g mode 17 out");
$setmode_23=shell_exec("gpio -g mode 23 out");
$gpio17_on=shell_exec("gpio -g write 4 1");
$gpio18_on=shell_exec("gpio -g write 17 1");
$gpio27_on=shell_exec("gpio -g write 23 1");
?>

