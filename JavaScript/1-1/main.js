console.log("Hello World!!");
console.log(65536);
console.log(10 + 5);
console.log(10 * 5);
console.log("Hello World!!");
console.log("Hello " + "World!!");
// 割り算の余りの値を求めたい場合は「%」を使用します。
console.log(10 % 2);
/*
上記の場合、10割る2で余り0
そのため出力は「0」
下記の場合、出力は「1」になります
*/
console.log(10 % 3);
console.log("10 + 8");
console.log(10 + 8);
console.log("20割る3の余りは"+20 % 3);
//ダイアログボックス () の中に文字列を入れる
window.alert("Hello World!!");
//JavaScriptに限らず、プログラムの基本は、「〇〇は✕✕しなさい」と命令することです。
//今回使ったconsole.log()やwindow.alert()の場合、
//・「〇〇は」がconsole、window
//・「✕✕しなさい」がlog()、alert()
//・()の中のが”Hello World”が✕✕の指示に必要な情報
//になります。
//JavaScriptでは、このような命令の中で
//・「〇〇は」に当たる部分のことを オブジェクト
//・「✕✕しなさい」に当たる部分のことを メソッド
//・指示に必要な情報に当たる部分のことを パラメータ
//と呼びます。