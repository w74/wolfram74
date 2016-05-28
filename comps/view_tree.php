<?php

$parse = new Parsedown();
$json = json_decode(file_get_contents("js/info.json"), true);
$id_count = 0;

echo("<div role='tablist' aria-multiselectable='true'>
        <div class='root branch' id='" . get_id('b')
          . "' aria-controls='" . get_id('c')
          . "' tabindex='" . get_id('t')
          . "' role='tab' aria-selected='true' aria-expanded='false'>"
            . $parse->text($json['root'])
        . "</div>
        <ul class='tree root' id='" . get_id('c')
          . "' aria-labelledby='" . get_id('a')
          . "' role='tabpanel' aria-hidden='true'>"); 
print_tree($json['tree']); 
echo("</ul>"); 
 
function print_tree($tree){ 
  global $parse;
  foreach ($tree as $value){ 
    if(isset($value['tree'])){

      echo("<li class='node' role='tablist' aria-multiselectable='true'>
              <div class='content branch' id='" . get_id('b')
                . "' aria-controls='" . get_id('c')
                . "' tabindex='" . get_id('t')
                . "' role='tab' aria-expanded='false'>"
                  . $parse->text($value['content'])
              . "</div>
              <ul class='tree' id='" . get_id('c')
                . "' aria-labelledby='" . get_id('a')
                . "' role='tabpanel' aria-hidden='true'>"); 
      print_tree($value['tree']); 
      echo("</ul>"); 
    } else { 
      echo("<li class='node'>
              <div class='content'>"
                . $parse->text($value['content'])
              . "</div>"); 
    }
    echo("</li>"); 
  } 
}

function get_id($trigger){
  global $id_count;
  switch ($trigger) {
    case 'a':
      return "b" . $id_count;
    case 'b':
      $id_count += 1;
      return "b" . $id_count;
    case 'c':
      return "c" . $id_count;
    case 't':
      return $id_count;
  }
}

?>