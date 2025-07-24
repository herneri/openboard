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

	$page_title = "New Post [" . $_GET["board"] . "]";
	$is_index = false;
	require_once("src/header.php");
?>

<main>
	<link rel="stylesheet" href="css/post-form.css">

	<div class="section">
	<h2> New Post [<?php echo($_GET["board"]); ?>] </h2>

	<p class="error" id="message"></p>

	<form id="post_form" action="/new-post-api.php" method="POST">
		<label for="title"> Title </label> <br/>
		<input name="title" id="title" type="text"/>
		<br/>

		<label for="author"> Author Name </label> <br/>
		<input name="author" id="author" type="text" placeholder="Anonymous"/>
		<br/>
	
		<label for="content"> Content </label> <br/>
		<textarea name="content" id="content" cols=50 rows=10></textarea>
		<br/>

		<label for="image"> Image </label>
		<input name="image" id="image" type="file"/> <br/>

		<input id="submit" type="submit" value="Post"/>
	</form>

	<script src="js/validate-post.js"></script>
</main>

<?php
	require_once("src/footer.php");
?>
