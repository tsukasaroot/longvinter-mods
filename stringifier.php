<?php

if ($argc === 2 && $argv[1] === 'view') {
	$mods = file_get_contents('modules-list.json');
	$mods = json_decode($mods, true);
	var_dump($mods);
	exit;
}

if ($argc !== 3)
	exit;

$mods = file_get_contents('modules-list.json');
$mods = json_decode($mods, true);

$mods[$argv[1]] = $argv[2];

$mods = json_encode($mods);

file_put_contents('modules-list.json', $mods);

?>