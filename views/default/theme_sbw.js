/**
 * Site wide bindings
 */
define(function (require) {
	var elgg = require('elgg');
	var $ = require('jquery');

	$(document).on('click', '.sbw-off-canvas-toggle', function (e) {
		e.preventDefault();
		$('.elgg-page').toggleClass('elgg-page-show-off-canvas');
		$('.sbw-off-canvas-toggle').toggleClass('elgg-state-active');
	});

	function getLightboxOptions(hook, type, params, options) {
		return $.extend({}, options, {
			current: elgg.echo('js:lightbox:current', ['{current}', '{total}']),
			previous: '<span class="fa fa-caret-left"></span>',
			next: '<span class="fa fa-caret-right"></span>',
			close: '<span class="fa fa-times"></span>',
			opacity: 0.5
		});
	}

	require(['elgg/ready'], function () {
		elgg.register_hook_handler('getOptions', 'ui.lightbox', getLightboxOptions);
	});
});
