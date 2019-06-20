<?php
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
?>
<html>
<body>
	<h1><?php echo htmlspecialchars($browserAgent) ?></h1>
</body>
</html>
