//ハンバーガーメニュー
$('#g-nav-sp').hide();
$('#ham-btn').on('click',function(){
$(#g-nav).toggleClass('is-active');
$('#g-nav-sp').fadeToggle(500);

//ナビボタンをクリックしたらナビを消す
$('#g-nav a').on('click',function(){
$('#g-nav').hide();
$('#ham-btn').removeClass('is-active');
});

});