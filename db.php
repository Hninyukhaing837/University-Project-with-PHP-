<?php
try {
$dbc = new PDO('mysql:host=localhost; dbname=proj_db', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>