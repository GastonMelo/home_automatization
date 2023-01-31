<?php
$status=shell_exec("gpio -g read 4");
if($status == 1)
{
	shell_exec("gpio -g write 4 0");
	$color="#FFFFFF";
}
else
{
	shell_exec("gpio -g write 4 1");
	$color= "lightblue";
}
echo $color;
?>
