<?php


//$_POST["onamae"]空だったら
if(!(isset($_POST["onamae"]))){
header("location:index.html");
exit();
}




$name = htmlspecialchars($_POST["onamae"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$gender = $_POST["gender"];
$message = htmlspecialchars($_POST["message"],ENT_QUOTES);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Box|確認ページ</title>
        <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Nerko+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
<h1>Sweet Box</h1>
<p class="tag-line">おうちで楽しむ新しいスイーツ体験</p>
<p id="ham-btn"><span></span></p>
</header>

<nav id="g-nav">
<ul>
    <li><a href="../">トップ</a></li>
    <li><a href="../index.html#item">商品情報</a></li>
    <li><a href="../index.html#flow">ご登録の流れ</a></li>
    <li><a href="../index.html#shop">スイーツ店の紹介</a></li>
    <li><a href="../index.html#news">お知らせ</a></li>
    <li><a href="../question/">よくあるご質問</a></li>
    <li><a href="index.html">お申し込み</a></li>
</ul>
</nav>

<div class="form-wrapper">

<h2>お申し込み|確認画面</h2>

<ul class="form-step">
<li >step1<span>情報の入力</span></li>
<li class="current">step2<span>入力内容の確認</span></li>
<li>step3<span>送信完了</span></li>
</ul>

<form id="g-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdA45aJc2Hu0Vw6GxCNVfjdu1emq4KhWh5x8hZ4swRaacLd9g/formResponse" method="post">
<dl> 
<dt>お名前</dt>
<dd><?php echo $name; ?></dd>


<dt>メールアドレス</dt>
<dd><?php echo $email; ?></dd>

<dt>性別</dt>
<dd><?php echo $gender; ?></dd>

<dt>お問い合わせ内容</dt>
<dd><?php echo $message; ?></dd>
</dl>


<!-- googleにデータ送信 -->
<input type="hidden" name="entry.2045820803" value="<?php echo $name; ?>">

<input type="hidden" name="entry.488576857" value="<?php echo $email; ?>">

<input type="hidden" name="entry.518372020" value="<?php echo $gender; ?>">

<input type="hidden" name="entry.1004628431" value="<?php echo $message; ?>">


<input type="submit" value="送信">



</form>
</div> <!-- /.form-wrapper -->

<footer>
<p>
    <smail>&copy; <span id="this-year"></span> Sweet Box</smail>
</p>



</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="../js/script.js"></script>

<script>
$(function(){
//ajaxでページ遷移する
$('#g-form').submit(function(event){
var formData = $('#g-form').serialize();
$.ajax({
url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdA45aJc2Hu0Vw6GxCNVfjdu1emq4KhWh5x8hZ4swRaacLd9g/formResponse",
data: formData,
type: "POST",
dataType: "xml",
statusCode: {
0: function(){
window.location.href = "thanks.html"; //ページ遷移先のパス
},
200: function(){
//失敗したときの処理
alert('失敗しました');
}
}


});
//googleformへのページ遷移をキャンセル
event.preventDefault();


});


});
</script>
</body>
</html>