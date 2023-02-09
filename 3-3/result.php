<?php
$number = $_GET['number'];
?>
<?php

echo date("Y/m/d", time());
の運勢は<br>
<p>選ばれた数字は
echo mt_rand($number); ?></p><br>
<?php
$number = mt_rand($number)
if($number === 0){
    echo '凶';
} elseif($number = 1,3){
    echo '小吉';
} elseif($number = 4,6){
    echo '中吉';
} elseif($number = 7,8){
    echo '吉';
} elseif($number === 9){
    echo '大吉';
}
?>