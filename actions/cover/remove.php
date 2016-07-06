<?php
/**
 * Cover remove action
 */

$user_guid = get_input('guid');
$user = get_user($user_guid);

if (!$user || !$user->canEdit()) {
	register_error(elgg_echo('cover:remove:fail'));
	forward(REFERER);
}

$user->deleteIcon('cover');

// Remove icon timestamp
unset($user->covertime);

system_message(elgg_echo('cover:remove:success'));
forward(REFERER);
