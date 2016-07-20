<?php
/**
 * Elgg topbar wrapper
 * Check if the user is logged in and display a topbar
 * @since 1.10
 */

?>
<div class="elgg-page-topbar">
	<div class="elgg-inner">
		<?php
			echo elgg_view('page/elements/topbar', $vars);

			$img = elgg_view('output/img', array(
				'src' => elgg_get_simplecache_url('graphics/logo.png'),
				'alt' => 'Social business world'
			));

			echo elgg_view('output/url', array(
				'href' => elgg_is_logged_in() ? '/activity' : '/',
				'text' => $img,
				'id' => 'site-logo',
			));
		?>

	</div>
</div>