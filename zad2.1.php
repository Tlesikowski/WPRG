<?php

function rantom(){
  
  $index =0;
  $naray = array();
  
  for($i = 0;$i < 20;$i++) {
            $naray[$i] = rand(1, 50);
        }
  echo "Wybierz indeks:(0-19) ";
        $index = readline();
  return $naray[$index];
}

$ans= rantom();
echo $ans;


?>
