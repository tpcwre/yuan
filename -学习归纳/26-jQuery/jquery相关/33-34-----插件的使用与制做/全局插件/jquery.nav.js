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


//ע�⣺ Щ��������ú�ǧ��Ҫ������HTMLҳ������ ��