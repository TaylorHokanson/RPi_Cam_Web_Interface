<?php

$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 7 out");
$gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 1");
sleep(10);
$gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");

?>