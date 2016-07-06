<?php
/**
 * Saves uploaded profile cover image
 */

$guid = get_input('guid');
$owner = get_entity($guid);

if (!$owner || !($owner instanceof ElggUser) || !$owner->canEdit()) {
	register_error(elgg_echo('cover:upload:fail'));
	forward(REFERER);
}

$error = elgg_get_friendly_upload_error($_FILES['cover']['error']);
if ($error) {
	register_error($error);
	forward(REFERER);
}

$result = $owner->saveIconFromUploadedFile('cover', 'cover');

$owner->covertime = time();
system_message(elgg_echo("cover:upload:success"));

forward(REFERER);
