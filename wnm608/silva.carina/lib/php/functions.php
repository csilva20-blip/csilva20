<?php


function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

function file_get_json($filename) {

	$file = file_get_contents($filename); 
	return json_decode($file);
}

function getTypeOptions($users, $selected) {
	$types = array_unique(array_map(fn($u) => $u->type, $users));
	sort($types);

	$options = "";
	foreach ($types as $type) {
		$isSelected = ($type === $selected) ? "selected" : "";
		$options .= "<option value=\"$type\" $isSelected>$type</option>";
	}

	return $options;
}

