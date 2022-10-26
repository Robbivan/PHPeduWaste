<?php


echo "SecondFile <br>";

$foo='bar';
$decimate=[1,2,3];
echo $decimate[-1];
echo '<pre>';
print_r($decimate);
echo'</pre>';

$arrayas=['name'=> 'PHP', 'help'=> 'Koll'];
echo $arrayas['name'];
if ($arrayas['name']=='PHP')
{
    echo "Yes";
}
$a=10;
//$res=sum(123,4);
$res=sum_float(123.5,23.6);

echo "<br>".$res;
echo "<br>". sum(123,4) . "<br>";
while(true){
    if ($a==0){
        break;
    }
    echo $a."<br>";
    $a--;
}
function sum(int $x, int $y):int{
    return $x+$y;
}
function sum_float($x, $y):float{
    return $x+$y;
}
?>
