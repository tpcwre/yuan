/*			
			//=====全局插件
;(function($){
	$.extend({
		'nav':function(){
			$(".nav").parent().hover(function(){
				$(this).find('.nav').show();
			},function(){
				$(this).find('.nav').hide();
			});
		}
	});
})(jQuery);
*/
			//=====局部插件
;(function($){
	$.fn.extend({
		'nav':function(){
			this.find(".nav").parent().hover(function(){
				$(this).find('.nav').show();
			},function(){
				$(this).find('.nav').hide();
			});
		}
	});
})(jQuery);







