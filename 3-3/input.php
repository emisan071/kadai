<!-- くじ引きを作ります -->
<!-- 分かりやすい様に、適当な数字（０〜９）の羅列を入力して、
占うというボタンを押した後、ランダムな位置の数字を抜き出し -->

０：凶、１〜３：小吉、４〜６、中吉、７〜８：吉、９：大吉

の結果を今日の日付と一緒に表示してください。

 

step1:入力フォームの作成
数字の入力と占うというボタンを作成
step2:結果を表すページを作成し、
フォームから受け取った数字の羅列から1文字の数字を抜き出す。
step3:今日の日付と結果を表示する。

<form action="result.php" method="get">
  ０～９の番号を使って好きな数字の羅列を入力してください。<br>
  <input type="text" name="number" />
  <br>
  <input type="submit" value="占う" />
</form>