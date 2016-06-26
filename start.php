<?php

elgg_register_event_handler('init', 'system', 'theme_sbw_init');

function theme_sbw_init() {
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');

	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'theme_sbw_topbar_menu');

	elgg_require_js('theme_sbw');

	elgg_extend_view('elgg.css', 'theme_sbw.css');

	elgg_unextend_view('page/elements/sidebar', 'search/header');
	elgg_extend_view('page/elements/topbar', 'search/header');
}

/**
 *
 */
function theme_sbw_topbar_menu($hook, $type, $menu, $params) {
	$user = elgg_get_logged_in_user_entity();

	foreach ($menu as $item) {
		switch($item->getName()) {
			case 'friends':
			case 'messages':
				$item->setSection('alt');
				break;
			case 'account':
				$item->setPriority('1000');
				$item->setText(elgg_view_icon('cog'));
				break;
			case 'profile':
				$icon = elgg_view('output/img', array(
					'src' => $user->getIconURL('tiny'),
				));
				$item->setText("{$icon}<span>{$user->name}</span>");
				break;
		}
	}

	$menu[] = ElggMenuItem::factory(array(
		'name' => 'site_menu_toggle',
		'text' => elgg_view_icon('bars'),
		'href' => '',
		'priority' => 1,
	));

	return $menu;
}
