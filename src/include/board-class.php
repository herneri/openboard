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

class board extends construct {
	public $name;
	public $post_total;

	private const NAME_MAX_LEN = 30;

	public function transfer_post_data($post): void {
		$this->name = $post["name"];
		$this->post_total = $post["post_total"];
		return;
	}

	public function verify_attributes(): bool {
		if (strlen($this->name) > self::NAME_MAX_LEN) {
			return false;
		}

		return true;
	}

	public function load_db_data($db_connection, $id): bool {
		$prepared_statement = $db_connection->prepare("SELECT * FROM boards WHERE board_id = ?");

		$prepared_statement->execute([$id]);
		$result = $prepared_statement->fetch(PDO::FETCH_ASSOC);

		if ($result == false) {
			return false;
		}

		$this->id = $id;
		$this->name = $result["name"];
		$this->post_total = $result["post_total"];

		return true;
	}
}
