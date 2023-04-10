//bxslider関数を呼び出す
$('.bxslider').bxSlider({
mode: 'fade',
auto: true,
controls: false,
pager: false, //下の黒い●をoff
touchEnabled: false, //スマホ時のスライドを無効


});

//外部ファイルを呼び出す
$('#news-list').load('news.txt');

//ハンバーガーメニュー
$('#g-nav').hide();
$('#ham-btn').on('click',function(){
$(this).toggleClass('is-active');
$('#g-nav').fadeToggle(500);

//ナビボタンをクリックしたらナビを消す
$('#g-nav a').on('click',function(){
$('#g-nav').hide();
$('#ham-btn').removeClass('is-active');
});

});

//西暦を取得
let fullYear =new Date().getFullYear();

//２０２４年以降は2023-2024と表示させたい
if(fullYear > 2023){
$('#this-year').text('2023 - '+fullYear);
}else{
$('#this-year').text(fullYear);
}