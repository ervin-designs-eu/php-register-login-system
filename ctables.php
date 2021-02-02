<!DOCTYPE html>
<!--SQL CONNECTION TESTING-->
<html>
<body>

<h1>SQL - Creating the users table ! </h1>

<?php

require_once "config.php";

//creating a table
$sql = "CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "Table users created successfully";
}	else {
	echo "Error creating table: " . $conn->error;
}
$conn-close();
	


?>

</body>
</html>
