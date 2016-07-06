<?php
/**
 * Cover crop action
 */

$guid = get_input('guid');
$owner = get_entity($guid);

if (!$owner instanceof ElggUser || !$owner->canEdit()) {
	register_error(elgg_echo('cover:crop:fail'));
	forward(REFERER);
}

$x1 = (int) get_input('x1', 0);
$y1 = (int) get_input('y1', 0);
$x2 = (int) get_input('x2', 0);
$y2 = (int) get_input('y2', 0);

$coords = array(
	'x1' => $x1,
	'x2' => $x2,
	'y1' => $y1,
	'y2' => $y2,
);

$file = new ElggFile();
$file->owner_guid = $owner->getGUID();
$file->setFilename("cover/{$owner->guid}master.jpg");

$success = $owner->saveIconFromElggFile($file, 'cover', $coords);

if (!success) {
	register_error(elgg_echo('cover:crop:fail'));
	forward(REFERER);
}

$owner->covertime = time();

$owner->cover_x1 = $x1;
$owner->cover_x2 = $x2;
$owner->cover_y1 = $y1;
$owner->cover_y2 = $y2;

system_message(elgg_echo('cover:crop:success'));
forward(REFERER);
