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

	require_once("src/config.php");

	$index_config = load_index_config();

	$is_index = true;
	require_once("src/header.php");
?>

	<div class="section">
		<h2> Boards </h2>

		<?php
			if (count($index_config["boards"]) == 0) {
				echo("<p> No boards listed </p>");
			} else {
				foreach ($index_config["boards"] as $board) {
					echo("<p>" . $board . "</p>");
				}
			}
		?>
	</div>
	
	<div class="section">
		<h2> Top Posts </h2>

		<!-- TODO: Fetch top posts from API, show here -->
		<?php
			if (true) {
				echo("<p> Not enough posts (8 are required)</p>");
			}
		?>
	</div>

<?php
	require_once("src/footer.php");
?>
