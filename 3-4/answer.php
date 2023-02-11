<link rel="stylesheet" href="css/style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
?>

<?php
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if(isset($question) == isset($answer)){
	$result = "正解！";
}else{
	$result = "残念･･･";
}
?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($question1 == $answer1){
	echo "正解！";
}else{
	echo "残念･･･";
}
?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($question2 == $answer2) {
    echo '正解！';
} else {
    echo'残念・・・';
}
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($question3 == $answer3) {
    echo '正解！';
} else {
    echo '残念・・・';
}
?>