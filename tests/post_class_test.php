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

use PHPUnit\Framework\TestCase;
require_once("../src/include/post-class.php");

class post_class_test extends TestCase {
	public function test_transfer_post_data() {
		$result = true;

		$post_example = array(
			"name" => "User",
			"title" => "A Post",
			"content" => "Some text"
		);

		$test = new post;

		$target = new post;
		$target->name = $post_example["name"];
		$target->title = $post_example["title"];
		$target->content = $post_example["content"];
		$target->posted_on = date("y/m/d");

		$test->transfer_post_data($post_example);

		if ($test->name != $target->name || $test->title != $target->title
			|| $test->content != $target->content || $test->posted_on != $target->posted_on) {
			$result = false;
		}

		$this->assertTrue($result);
		return;
	}
}
