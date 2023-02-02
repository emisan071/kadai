<?php
// りんご、みかん、桃のフルーツの単価と個数をもとに料金を計算します

// step1:フルーツと単価の連想配列を作成してください。
// 配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
// step2:単価を計算する関数を定義してください。
// 引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
// step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
// りんご300円、みかん150円、桃3000円



$fruits = ["りんご"=>300,"みかん"=>150,"もも"=>3000
];
foreach ($fruits as $key => $price){ 
}
echo $key. "は". $price. "円です。<br>";
// function gettotal($price, $quantity){
//     $total = $price * $quantity;
// }
//     $quantity = 3;
//     echo $key. "は". $total. "円です。<br>";




    //  function gettotal($value, $quantity){
    //   $total = $value * $quantity;
    //   $quantity = 3
    //   print "$value は $total 円です。";
    // }
//     //   return $total;
//     //   $total = gettotal($value,$quantity);
    
//      gettotal(300,1);
//      print "$key は $total 円です。";

$fruits =["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];
foreach ($fruits as $key => $value) {
    echo $key."といったら".$value.'<br>';
}
?>