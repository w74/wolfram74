<?php

$json = json_decode(file_get_contents("js/info.json"), true);
echo("<div class=\"root branch\">" . $json['root'] . "</div><ul class=\"tree root\" role=\"tree\">");
print_tree($json['tree']);
echo("</ul>");

function print_tree($tree){
  foreach ($tree as $value){
    if(isset($value['tree'])){
      echo("<li class=\"node\"><div class=\"content branch\">" . $value['content'] . "</div>");
      echo("<ul class=\"tree\" role=\"treeitem\">");
      print_tree($value['tree']);
      echo("</ul>");
    } else {
      echo("<li class=\"node\"><div class=\"content\">" . $value['content'] . "</div>");
    }
    echo("</li>");
  }
}

?>