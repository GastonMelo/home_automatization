<?php
$status=shell_exec("gpio -g read 27");
if($status == 1)
{
        shell_exec("gpio -g write 27 0");
        $color="#FFFFFF";
}
else
{
        shell_exec("gpio -g write 27 1");
        $color= "lightblue";
}
echo $color;
?>

