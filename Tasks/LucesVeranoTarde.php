<?php 
$setmode_4=shell_exec("gpio -g mode 4 out");
$setmode_17=shell_exec("gpio -g mode 17 out");
$setmode_23=shell_exec("gpio -g mode 23 out");
$setmode_27=shell_exec("gpio -g mode 27 out");
$setmode_22=shell_exec("gpio -g mode 22 out");
$gpio4_on=shell_exec("gpio -g write 4 1");
$gpio17_on=shell_exec("gpio -g write 17 1");
$gpio23_on=shell_exec("gpio -g write 23 1");
$gpio27_off=shell_exec("gpio -g write 27 1");
$gpio22_on=shell_exec("gpio -g write 22 1");
?>
