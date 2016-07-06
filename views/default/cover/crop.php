<?php
/**
 * Cover cropping view
 *
 * @uses vars['entity']
 */

elgg_require_js('cover/crop');
?>
<div id="avatar-croppingtool" class="mtl ptm">
	<h2><?php echo elgg_echo('cover:crop:instructions:title'); ?></h2>
	<p><?php echo elgg_echo("cover:crop:instructions"); ?></p>
	<?php echo elgg_view_form('cover/crop', array(), $vars); ?>
</div>
