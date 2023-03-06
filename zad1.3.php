<?php

$badwords = array("Ble","HAHA","pjatk");
$zdanie = array("Bla"," ","Bla"," ", "pjatk"," ","bla", " ","Ble", " ","hihihuhu"," ","HAHA");
function cenzura(array $zdanie, array $badwords){
    foreach ($zdanie as $word){
        if(in_array($word,$badwords)){
            for ($i = 0; $i < strlen($word); $i++) {
                echo "*";
            }
        }
        else
        {
            echo $word;
        }

    }

}

cenzura($zdanie,$badwords);
?>