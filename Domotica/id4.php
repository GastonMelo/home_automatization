<?php
$status=shell_exec("gpio -g read 22");
if($status == 1)
{
        shell_exec("gpio -g write 22 0");
        $color="#FFFFFF";
}
else
{
        shell_exec("gpio -g write 22 1");
        $color= "lightblue";
}
echo $color;
?>

