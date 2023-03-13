
<?php
    function triang() {
      $a = readline("podaj podstawe trujkonta");
      $b = readline("podaj wysokosc trujkonta");
      
        return (($a*$b)/2);
    }

    function rectangle() {
      $a = readline("podaj bok a");
      $b = readline("podaj bok b");
        return ($a*$b);
    }

    function trape() {
      $a = readline("podaj gore trapezu");
      $b = readline("podaj spód trapezu");
      $c = readline("podaj wysokosc");
        return (($a+$b)*0.5*$c);
    }

    echo "Choose a shape to calculate the area of: \n";
    echo "1. Triangle \n";
    echo "2. Rectangle \n";
    echo "3. Trapezoid \n";

    $choice = readline();
    $ans;

    switch ($choice) {
    case 1:
        
        $ans=triang();
        echo "odpowiedz wynosi : " . $ans
        break;
    case 2:
        $ans=rectangle();
        echo "odpowiedz wynosi : " . $ans
        break;
    case 3:
        $ans=trape();
        echo "odpowiedz wynosi : " . $ans
        break;
    default:
        echo "Error";
        break;
    }

?>
