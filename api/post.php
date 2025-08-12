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

require_once("../src/include/post-class.php");
require_once("../src/db.php");

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// TODO: Insert img path into images, insert data about post into posts
}

if ($_GET["id"] <= 0 || $_GET["id"] == null) {
	http_response_code(400);
	exit();
}

$post_object = new post();
$result = $post_object->load_db_data($db_connection, $_GET["id"]);

if ($result == false) {
	http_response_code(404);
	exit();
}

$json_payload = array(
	"name" => $post_object->name,
	"title" => $post_object->title,
	"content" => $post_object->content,
	"posted_on" => $post_object->posted_on,
	"comment_count" => $post_object->comment_count,
	"image_id" => $post_object->image_id,
	"board_id" => $post_object->board_id
);

echo(json_encode($json_payload));
