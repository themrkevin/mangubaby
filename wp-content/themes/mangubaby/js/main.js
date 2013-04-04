/** ================
 *	Global objects
 ================ **/
var G = {};

!function($) {

/** ================================
 *	Lets keep the global variables 
 *	here to keep things tidy
 ================================ **/
G = {
	init : function() {
		this.bod = $('body'),
		this.header = $('#header'),
		this.mid = $('#mid'),
		this.article = G.mid.find('article'),
		this.footer = $('#footer');
	}
}
G.init();

/**
 *	Weekly Pregnancy Countup
 * ============================== */
!function() {
	var weeklyStatus = G.header.find('.week-status'),
		inDays = weeklyStatus.text(),
		inWeeks = Math.floor(inDays/7);

	weeklyStatus
		.html('<p><b>' + inWeeks + '/40</b> weeks now</p>')
		.removeClass('invisible');

}()

/**
 *	Posts: Image Links
 *	Full image size feature
 * ============================== */
!function() {
	var theImage = G.article.find('img.size-full'),
		theImageL = theImage.parent('a');

	// make sure the container a is relative
	theImageL.addClass('a-block clearfix');
	if( G.bod.hasClass('single-post') ) {
		// theImageL.click(function(e) {
		// 	e.preventDefault();
		// 	e.stopPropagation();
		// })
		theImage
			.unwrap()
			.wrap('<div class="a-block clearfix" />');
	}

	// create the full size image button
	theImage.each(function() {
		var that = $(this),
			imgP = that.attr('src');

		that.after('<a href="'+imgP+'" target="_blank" class="btn view-image">View Full Size</a>');
	});
}()

}(jQuery);