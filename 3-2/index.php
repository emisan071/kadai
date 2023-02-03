<!-- <?php
// りんご、みかん、桃のフルーツの単価と個数をもとに料金を計算します
// りんご300円、みかん150円、桃3000円

// step1:フルーツと単価の連想配列を作成してください。
// $fruits = ["りんご"=>300,"みかん"=>150,"もも"=>3000
// ];
// foreach( $fruits as $key => $value){


// // 配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
// $quantity = [2, 3, 4
// ];

// // step2:単価を計算する関数を定義してください。
// // 引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
// function gettotal($value, $quantity){
//     $product = $value * $quantity;
//     return $product;
//     }

// // step3:繰り返しを使ってそれぞれのフルーツを書き出してください。

//  print  "$key は $product 円です。<br>"; 
// }
// ?> -->

<?php
$array = [
    ["りんご","300"],
    ["みかん","150"],
    ["もも","3000"],
    ["りんご","2"],
    ["みかん","2"],
    ["もも","2"]
];

$keys=array_values(array_unique(array_column($array,0)));
foreach($keys as $value){
	$num = 1;
	foreach($array as $row){
		if($row[0]==$value){
			$num = $num * $row[1];
		}
	}
	$total[$value] = $num;

print  "$value は $num 円です。<br>"; 
}
?>
