<?php
/**
 * Upload and crop an cover page
 */

// Only logged in users
elgg_gatekeeper();

elgg_push_context('settings');
elgg_push_context('profile_edit');

$entity = $vars['entity'];

if (!$entity instanceof ElggUser || !$entity->canEdit()) {
	register_error(elgg_echo('cover:noaccess'));
	forward(REFERER);
}

$title = elgg_echo('cover:edit');

$content = elgg_view('cover/upload', array('entity' => $entity));

// Offer the crop view only if a cover has been uploaded
if (isset($entity->covertime)) {
	$content .= elgg_view('cover/crop', array('entity' => $entity));
}

$body = elgg_view_layout('one_column', array(
	'title' => $title,
	'content' => $content,
));

echo elgg_view_page($title, $body);
