// ヘッダースクロールイベントの設定
var startPos = 0;
$(function(){
$(window).scroll(function(){
 
var h =  $('#news').outerHeight();
//自身のスクロール量
var y = $(window).scrollTop();



//変数h以上スクロールしたら、#headerにaddClassする
if(y == startPos){	
} else if(h > y || 0 > y - startPos){
		//ヘッダーが上に消える
        $('#header').addClass('DownMove');
		$('#header').removeClass('UpMove');
    }else {
		//ヘッダーが上に消える
        $('#header').removeClass('DownMove');
		$('#header').addClass('UpMove');
    }
    
    startPos = y;

});





return false;



});