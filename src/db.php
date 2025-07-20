<?php

function db_setup($db_connection) {
	$db_connection->exec(file_get_contents("../sql/create-tables.sql"));

	// TODO: Populate board table with the names found in the config file.

	return;
}

$db_config = json_decode(file_get_contents("../config.json"), true)["database"];

try {
	$db_connection = new PDO("mysql:host=" . $db_config["host"] . ";dbname="
			. $db_config["name"], $db_config["username"], $db_config["password"]);
} catch (PDOException $e) {
	echo("<h1> openboard: Failed to open database connection </h1>" . $e);
}

db_setup($db_connection);
