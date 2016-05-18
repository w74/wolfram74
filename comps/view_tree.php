<?php

$json = json_decode(file_get_contents("js/info.json"), true);
echo("<div class=\"root branch\">" . $json['root'] . "</div><ul class=\"tree root\">");
print_tree($json['tree'], $mesa);
echo("</ul>");

function print_tree($tree, $mesa){
  foreach ($tree as $value){
    if(isset($value['tree'])){
      echo("<li class=\"node\"><div class=\"content branch\">" . $value['content'] . "</div>");
      echo("<ul class=\"tree\">");
      print_tree($value['tree'], $mesa);
      echo("</ul>");
    } else {
      echo("<li class=\"node\"><div class=\"content\">" . $value['content'] . "</div>");
    }
    echo("</li>");
  }
}

?>