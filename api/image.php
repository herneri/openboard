<?php

/*
	Copyright (C) 2025  Eric Hernandez

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU Affero General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU Affero General Public License for more details.

	You should have received a copy of the GNU Affero General Public License
	along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

require_once("../src/db.php");
require_once("../src/include/image-class.php");

header("Content-Type: application/json");

if ($_GET["id"] == null || $_GET["id"] <= 0) {
	http_response_code(400);
	exit();
}

$image_object = new image();
$status = $image_object->load_db_data($db_connection, $_GET["id"]);

if ($status == false) {
	http_response_code(404);
	exit();
}

$json_payload = array(
	"path" => $image_object->path
);

echo(json_encode($json_payload));
