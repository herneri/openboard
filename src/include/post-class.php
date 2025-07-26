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

require_once("board-construct.php");

class post extends board_construct {
	public $name;
	public $title;
	public $content;
	public $posted_on;

	public $comment_count;

	public $image_id;
	public $board_id;

	private const NAME_MAX_LEN = 20;
	private const TITLE_MAX_LEN = 25;
	private const CONTENT_MAX_LEN = 255;

	public function transfer_post_data($post) {
		$this->name = $post["name"];
		$this->title = $post["title"];
		$this->content = $post["content"];
		$this->posted_on = date("y/m/d");
		
		$this->comment_count = 0;

		/*
			The image and board ids are passed
			to this object at the API level.
		*/

		return;
	}

	public function verify_attributes() {
		return;
	}

	public function load_db_data($db_connection) {
		return;
	}
}
