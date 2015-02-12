<?php
function binary_search($data, $f){
  do {
    $cnt = count($data);
    $i = floor($cnt / 2);

    switch(TRUE) {
      case ($f == $data[$i]) :
        return $i;
      case ($f < $data[$i]) :
        $data = array_slice($data, 0, $i);
        break;
      case ($f > $data[$i]) :
        $data = array_slice($data, $i + 1);
        break;
    }
  } while($cnt != 1);
  return false;
}
