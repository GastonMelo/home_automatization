<?php
$status=shell_exec("gpio -g read 17");
if($status == 1)
{
        shell_exec("gpio -g write 17 0");
        $color="#FFFFFF";
}
else
{
        shell_exec("gpio -g write 17 1");
        $color= "lightblue";
}
echo $color;
?>

