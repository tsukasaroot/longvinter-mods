<?php

$array = [ 'url' => $argv[1]];

$mods = json_encode($array);

file_put_contents('modules-list.json', $mods);

?>