<?php

$parse = new Parsedown();
$json = json_decode(file_get_contents("js/info.json"), true);

echo $parse->text('Hello _World_!');

?>