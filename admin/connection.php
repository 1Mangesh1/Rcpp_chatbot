<?php

$conn = "";

try {
	$servername = "sql109.liveblog365.com";
	$dbname = "lblog_34438133_bot";
	$username = "lblog_34438133";
	$password = "123456789";

	$conn = new PDO(
		"mysql:host=$servername; dbname=bot",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
