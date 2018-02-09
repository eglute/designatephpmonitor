<?php

$lines = file('./etc/openrc');
$vars = "";
foreach ($lines as $line_num => $line) {
    if (substr($line, 0, 6) === "export") {
        $trimmed = trim($line, "export");
        $trimmed = chop($trimmed);	
        $vars = $vars . $trimmed;
    }
}

putenv($vars);
$output = shell_exec("$vars openstack dns service list -c hostname -c service_name -c status 2>&1");

echo  "<pre>$output</pre>";

?>
