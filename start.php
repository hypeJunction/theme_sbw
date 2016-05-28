<?php

elgg_register_event_handler('init', 'system', 'theme_sbw_init');

function theme_sbw_init() {
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');
}
