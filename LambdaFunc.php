<?php
$sum = function (int|float ...$numbers){
return array_sum($numbers);
};

echo $sum(1,4.5,5);
echo "<br>".var_dump($sum);



function userConnect($bdDop){
    return function($user) use ($bdDop) {
        echo $user . "connect". $bdDop.'<br>';
    };
}



$bd=userConnect(" MyHome");
$bd(" Dmitri ");
$bd(" Maria ");
$bd=userConnect(" Comm");
$bd(" Dmitri ");
$bd(" Maria ");
//echo $sum;

$currentTime=date('m/d/Y g:ia');
echo $currentTime;


