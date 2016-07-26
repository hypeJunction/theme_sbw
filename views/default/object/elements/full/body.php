<?php

/**
 * Outputs object full view
 * @uses $vars['body'] Body
 */

$body = elgg_extract('body', $vars);
if (!$body) {
	return;
}
?>
<div class="elgg-listing-full-body"><?= $body ?></div>