<?php
/**
 * Cover upload view
 *
 * @uses $vars['entity']
 */

$entity = elgg_extract('entity', $vars);

$cover_image = elgg_view('output/img', array(
	'src' => $entity->getIconUrl(array(
		'size' => 'large',
		'type' => 'cover',
	)),
	'alt' => elgg_echo('cover'),
));

$current_label = elgg_echo('cover:current');

$remove_button = '';
if ($vars['entity']->covertime) {
	$remove_button = elgg_view('output/url', array(
		'text' => elgg_echo('remove'),
		'title' => elgg_echo('avatar:remove'),
		'href' => "action/cover/remove?guid={$entity->guid}",
		'is_action' => true,
		'class' => 'elgg-button elgg-button-delete',
	));
}

$upload_form = elgg_view_form('cover/upload',
	array('enctype' => 'multipart/form-data'),
	$vars
);

?>

<h2><?php echo elgg_echo('cover:upload:instructions:title'); ?></h2>
<p><?php echo elgg_echo('cover:upload:instructions'); ?></p>

<?php

$image = <<<HTML
<div id="current-user-avatar" class="mrl prl">
	<label>$current_label</label><br />
	$cover_image
</div>
$remove_button
HTML;

$body = <<<HTML
<div id="avatar-upload">
	$upload_form
</div>
HTML;

echo elgg_view_image_block($image, $upload_form);
