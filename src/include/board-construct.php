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

/*
	Super class for the board, image, admin, and other classes.
	Abstracts common data procedures for these constructs.
*/
abstract class board_construct {
	public $id;

	/* Set the data in $_POST to a new object. */
	public abstract function transfer_post_data($post);

	/* Verify all attributes of an object. */
	public abstract function verify_attributes();

	/* Load data from the database into an object. */
	public abstract function load_db_data($db_connection);
}
