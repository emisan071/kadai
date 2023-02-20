let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven() {
    for (let i = 0; i < numbers.length; i++){
     num = numbers[i]
    if (num % 2 === 0) {
    console.log(num + 'は偶数です');
}
}
}
console.log(isEven());


class car{
    constructor(gas, number){
        this.gas = gas;
        this.number = number;
}
getNumGas(){
    console.log('ガソリンは'+(this.gas)+'です。ナンバーは'+(this.number)+'です。');
}
}
let car2=new car('ハイオク',1345);
car2.getNumGas();