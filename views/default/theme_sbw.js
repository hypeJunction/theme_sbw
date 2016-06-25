/**
 * Site menu toggle
 */
define(function(require) {
	$ = require('jquery');

	$(document).on('click', '.elgg-menu-item-site-menu-toggle', function(e) {
		e.preventDefault();

		var menu = $('.elgg-menu-site');

		if (menu.width() == 0) {
			var newWidth = "100%";
		} else {
			var newWidth = "0";
		}

		$('.elgg-menu-site').animate({
			width: newWidth
		}, "fast");
	});
});
