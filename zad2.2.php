<?php
    function table(string $a){
      
        $array = array("anglikiem"=>"anglia"
                       ,"francuzem"=>"francja"
                       ,"niemcem"=>"niemcy"
                       ,"polakiem"=>"polska"
                       ,"hiszpanem"=>"hiszpania");
        foreach($array as $obywatel => $kraj){
            if($a == $obywatel) {
                echo "jestes z " . $kraj;
            }
          
        }
    }

    echo "Kim jestes ?";
    $a = readline();
    table($a);
    ?>
