;(function($){
$.extend({
   "nav":function(){
	$(".nav").parent().hover(function(){
		$(this).find('.nav').slideDown();
	},function(){
		$(this).find('.nav').stop(true,true).slideUp();
	});
   }
});
})(jQuery);


//注意： 些插件制做好后，千万不要忘记在HTML页面引入 。