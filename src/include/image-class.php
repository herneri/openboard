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

require_once("construct.php");

class image extends construct {
	public $path;
	private const PATH_MAX_LEN = 255;

	public function transfer_post_data($post): void {
		$this->path = $post["path"];
		return;
	}

	public function verify_attributes(): bool {
		if (strlen($this->path) > self::PATH_MAX_LEN) {
			return false;
		}

		return true;
	}

	public function load_db_data($db_connection, $id): bool {
		$prepared_statement = $db_connection->prepare("SELECT * FROM images WHERE image_id = ?");

		$prepared_statement->execute([$id]);
		$result = $prepared_statement->fetch(PDO::FETCH_ASSOC);

		if ($result == false) {
			return false;
		}

		$this->path = $result["image_path"];
		return true;
	}
}
