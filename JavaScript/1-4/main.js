// 繰り返しの処理
// while文（使用頻度★★★★☆）
// while ( 条件式 ) {
//     処理;
// }
// 条件がtrueである限り 永遠に処理が繰り返されます
// let number = 1;
// while (number <= 100) {
//     console.log(number);
//     number++;
// }

// do...while文（使用頻度★★☆☆☆）
// whileとdo...whileの違いは、条件式の評価を行うタイミング
// let number = 1;
// do {
//     console.log(number);
//     number++;
// } while (number <= 100);

// // for文（使用頻度★★★★★）
// // 回数を指定してループ
// // for (初期化式; 条件式; 変化式) {
// //     処理
// // }
// for (let number = 1; number <= 100; number++) {
//     console.log(number);
// }

// breakとcontinue
// 強制的にループを終了させたり、処理をスキップさせる
// let number = 0;
// while (number < 5) {
//     if (number === 3) {
//         break;
//     }
//     console.log(number);
//     number++;
// }

// ※continue でスキップする前にインクリメント
// let number = 0;
// while (number < 5) {
//     if (number === 3) {
//         number++;
//         continue;
//     }
//     console.log(number);
//     number++;
// }


// FizzBuzz問題
for(let number = 1; number <= 100; number++){
    if(number %5 === 0 && number %3 === 0){
        console.log("FizzBuzz!!");  
    }else if(number %5 === 0){
        console.log("Buzz!"); 
    }else if(number %3 === 0){
        console.log("Fizz!");
    }else{
        console.log(number);
    }
}

