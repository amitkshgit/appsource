<?php

print gmdate("Y-m-d\TH:i:s\Z");
$xforwardedfor  = getenv('HTTP_X_FORWARDED_FOR');

$instanceid = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
$localipv4 = file_get_contents("http://169.254.169.254/latest/meta-data/local-ipv4");

print "Info: \t$instanceid\t$localipv4\t$xforwardedfor\n";

?>
