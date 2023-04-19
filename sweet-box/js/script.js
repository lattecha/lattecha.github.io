$(function(){

//ハンバーガーメニュー
$('#ham-btn').on('click',function(){
$(this).toggleClass('is-active');
$('#g-nav').slideToggle(200);

});

//ナビボタンをクリックしたらナビを非表示
$('#g-nav a').on('click',function(){
$('#g-nav').slideToggle(200);
$('#ham-btn').removeClass('is-active');

});



});