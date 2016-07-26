<?php

//echo elgg_view('core/account/login_dropdown');
echo elgg_view('output/url', [
	'text' => elgg_view_icon('chevron-left'),
	'href' => '#',
	'class' => 'sbw-off-canvas-toggle',
]);
echo elgg_view_menu('site');
