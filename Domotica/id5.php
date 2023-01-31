<?php
$status=shell_exec("gpio -g read 24");
if($status == 1)
{
        shell_exec("gpio -g write 24 0");
	shell_exec("gpio -g write 25 0");
        $color="#FFFFFF";
}
else
{
        shell_exec("gpio -g write 24 1");
	shell_exec("gpio -g write 25 1");
        $color= "lightblue";
}
echo $color;
?>

