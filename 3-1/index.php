<?php
//3の倍数のとき Fizz! と出力
//5の倍数のとき Buzz! と出力
//3の倍数かつ5の倍数のとき FizzBuzz!! と出力(15の倍数とはしない)
//3の倍数でも5の倍数でもない場合その数を出力
//それを1〜100まで実施

$i = 1;
for($i=1;$i<=100;$i++) { 
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "Fizzbuzz!"; 
  }
  elseif($i % 5 === 0) {
    echo "Buzz!";
  }
  elseif ($i % 3 === 0) {
    echo "Fizz!"; 
  }
  else {echo $i; }
  echo '<br>';

}
?>