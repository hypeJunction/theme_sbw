<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is added to the sidebar
 * @uses $vars['nav']     Optional override of the page nav (default: breadcrumbs)
 * @uses $vars['header']  Optional override for the header
 * @uses $vars['footer']  Optional footer
 * @uses $vars['class']   Additional class to apply to layout
 */
$class = (array) elgg_extract('class', $vars, []);
$class[] = 'elgg-layout';
$class[] = 'clearfix';

$sidebar = elgg_extract('sidebar', $vars);
if ($sidebar !== false) {
	$sidebar = elgg_view('page/elements/sidebar', $vars);
}
if (empty($sidebar)) {
	$class[] = 'elgg-layout-one-column';
} else {
	$class[] = 'elgg-layout-one-sidebar';
}

$nav = elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));
$header = elgg_view('page/layouts/elements/header', $vars);
$footer = elgg_view('page/layouts/elements/footer', $vars);
?>

<div class="<?= implode(' ', $class); ?>">
	<?php
	if (!empty($sidebar)) {
		?>
		<div class="elgg-sidebar">
			<div class="elgg-inner">
				<?= $sidebar ?>
			</div>
		</div>

		<?php
	}
	?>

	<div class="elgg-main elgg-body">
		<div class="elgg-inner">
			<?php
			if ($header) {
				?>
				<div class="elgg-layout-header">
					<?= $header ?>
				</div>
				<?php
			}
			?>
			<div class="elgg-layout-content">
				<?php
				// @todo deprecated so remove in Elgg 2.0
				if (isset($vars['area1'])) {
					echo $vars['area1'];
				}
				if (isset($vars['content'])) {
					echo $vars['content'];
				}
				?>
			</div>

			<?php
			if ($footer) {
				?>
				<div class="elgg-layout-footer">
					<?= $footer ?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
