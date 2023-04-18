//ハンバーガーメニュー
$('#g-nav-sp').hide();
$('#ham-btn').on('click',function(){
$('#ham-btn').toggleClass('is-active');


//ナビボタンをクリックしたらナビを消す
$('#g-nav a').on('click',function(){
$('#g-nav').hide();
$('#ham-btn').removeClass('is-active');
});

});