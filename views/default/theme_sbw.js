/**
 * Site menu toggle
 */
define(function(require) {
	$ = require('jquery');

	$(document).on('click', '.sbw-off-canvas-toggle', function(e) {
		e.preventDefault();
		$('.elgg-page').toggleClass('elgg-page-show-off-canvas');
		$('.sbw-off-canvas-toggle').toggleClass('elgg-state-active');
	});
});
