<?php
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";

// As of PHP 8.0.0, the following does not work anymore. The curl_init function returns a CurlHandle object now.
$c = curl_init();
echo get_resource_type($c) . "\n";
?>