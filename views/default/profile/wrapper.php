<?php
/**
 * Profile info box
 */

?>

<?php /* We add mrn here because we're doing stupid things with the grid system. Remove this hack */ ?>
<div class="profile">
	<div class="elgg-inner clearfix h-card vcard">
		<?php echo elgg_view('profile/owner_block'); ?>
	</div>
</div>