<?php

$seq =[0,1];

$n = 22;

for ($i = 2; $i <= 20; $i ++){

    array_push($seq, ($seq[$i-1]+$seq[$i-2]));


}

echo "<br> 20 primeiros elementos da sequência de fibonacci:<br>";

foreach($seq as $elem){
    echo "$elem, ";

}
echo"...";

if (in_array($n, $seq)){

    echo "<br> O número $n pertence à sequência de Fibonacci.";
} else{
    echo "<br> O número $n não pertence à sequência de Fibonacci.";
}


?>