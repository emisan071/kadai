<?php
$numbers = $_GET['numbers'];
$split_str = str_split($numbers);

$number_key = array_rand($split_str,1);
$value = $split_str[$number_key];

// shuffle($split_str);
// $number = array_slice($split_str,1,1);
// var_dump($number);


echo date("Y/m/d", time())."の運勢は";
echo "<br>";

echo "選ばれた数字は". $value;

// foreach($number as $key => $value){
//     print $value;
// }
echo "<br>";

$number = $value;
if($number === 0){
    echo "凶";
} elseif($number <=3){
    echo "小吉";
} elseif($number <=6){
    echo "中吉";
} elseif($number <=8){
    echo "吉";
} else {
    echo "大吉";
}
?>