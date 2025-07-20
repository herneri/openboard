<?php

function load_index_config() {
	$file_content = file_get_contents("./config.json");
	$config_json = json_decode($file_content, true);
	if ($config_json["index"]["board_name"] == "") {
		$config_json["index"]["board_name"] = "openboard";
	}

	return $config_json["index"];
}
