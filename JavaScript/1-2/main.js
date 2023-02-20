//let name = "hoge";
//nameと書いたのに、hogeと出力されるはずです
//console.log(name);

//変数として使用する場合は、そのまま変数名を記述するだけで大丈夫です。
//定数を定義する場合はletの部分をconstに変えると定数になります。

// let name = "池田";
// console.log(name + "くん");
// let number = 10;
// console.log(number * 3);

// console.log(`${name}くんは${number}月生まれです`);

//var ➡ 再代入できる。再定義できる。
//let ➡ 再代入できる。再定義できない。

// 「age is not defined」＝「ageという変数が定義されてないのに使われてますよ」
// let name = 'iwasaki';
// console.log(age);

// let name = 'iwasaki';
// let name = 'tanaka';
// console.log(name);

let price = 100;
console.log(price * 2);

price = 500;
console.log(price * 2);