<?php
/**
 * Avatar crop form
 *
 * @uses $vars['entity']
 */

elgg_load_js('jquery.imgareaselect');
elgg_load_js('cover_cropper');
elgg_load_css('jquery.imgareaselect');

$entity = elgg_extract('entity', $vars);

$master_img = elgg_view('output/img', array(
	'src' => $entity->getIconUrl(array(
		'size' => 'master',
		'type' => 'cover',
	)),
	'alt' => elgg_echo('cover'),
	'class' => 'mrl',
	'id' => 'user-cover-cropper',
));

$preview_img = elgg_view('output/img', array(
	'src' => $entity->getIconUrl(array(
		'size' => 'master',
		'type' => 'cover',
	)),
	'alt' => elgg_echo('cover'),
));

?>
<div class="clearfix">
	<?php echo $master_img; ?>
</div>

<?php

$coords = array('x1', 'x2', 'y1', 'y2');
foreach ($coords as $coord) {
	$coord_name = "cover_{$coord}";

	echo elgg_view_input('hidden', array(
		'name' => $coord,
		'value' => $entity->$coord_name,
	));
}

echo elgg_view_input('hidden', array(
	'name' => 'guid',
	'value' => $vars['entity']->guid,
));

echo elgg_view_input('submit', array(
	'value' => elgg_echo('cover:create'),
));
