<?php
$ip = $_SERVER["REMOTE_ADDR"];
$valid_ip = filter_var($ip, FILTER_VALIDATE_IP);
?>
<html><head><title>tony is cool!!!!!!!!!!!!!!!!!!!</title>
<style>
</style></head><body>
<div style="font-size: 800%;"><?php
if ($valid_ip) {
	echo $valid_ip;
}
?></div>
</body></html>
