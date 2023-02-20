//Humanクラスを作成
class taiyaki {
 //コンストラクタ
    constructor(nakami) {
        this.nakami = nakami;
    }

    //（関数）
    yaku() {
        console.log('中身は'+(this.nakami) +'です');
    }
}
let anko = new taiyaki('あんこ');
anko.yaku();

let kurimu = new taiyaki('クリーム');
kurimu.yaku();

let cheese = new taiyaki('チーズ');
cheese.yaku();
