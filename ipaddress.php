<?php
// Fetch public IP address using an external service
$publicIp = file_get_contents('https://api64.ipify.org?format=text');

// Display the public IP
echo "Your public IP address is: " . $publicIp;
?>
