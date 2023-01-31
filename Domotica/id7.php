<?php
$status=shell_exec("gpio -g read 9");
if($status == 1)
{
        shell_exec("gpio -g write 9 0");
        $color="#FFFFFF";
}
else
{
        shell_exec("gpio -g write 9 1");
        $color= "lightblue";
}
echo $color;
?>
