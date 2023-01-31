<?php
$status=shell_exec("gpio -g read 23");
if($status == 1)
{
        shell_exec("gpio -g write 23 0");
        $color="#FFFFFF";
}
else
{
        shell_exec("gpio -g write 23 1");
        $color= "lightblue";
}
echo $color;
?>
