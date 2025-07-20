<html>
<head>
	<title>
		<?php
			if ($page_title == null) {
				echo($index_config["board_name"]);
			} else {
				echo($page_title . " - " . $index_config["board_name"]);
			}
		?>
	</title>

	<link rel="stylesheet" href="css/index.css"/>
</head>

<body>
	<a href="/">
		<h1 id="board_name"><?php echo($index_config["board_name"]); ?></h1>
	</a>
	
	<nav>
	<?php 
		if ($is_index == false) {
			foreach ($index_config["boards"] as $board) {
				echo($board . " ");
			}
		}
	?>
	</nav>
