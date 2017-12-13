<?php

/**
 * @file
 * Default theme implementation to display the basic Valet overlay box.
 *
 * Variables:
 * - $form: Contains the entire rendered HTML form.
 */

?>
<div id="valet" class="valet overlay">
	<div id="valet-inner" class="valet-inner">
		<div id="valet-form" class="valet-form">
			<div id="valet-loading">
				<div id="valet-loading-icon"></div>
				<div id="valet-loading-info">Content Admin</div>
				<div id="valet-loading-value">redirecting you to: <span>admin/content</span></div>
			</div>
  		<?php print $form; ?>
  		<div id="valet-submit"></div>
  	</div>
		<div id="valet-results" class="valet-results">
    <div class="valet-close"></div>
		</div>
	</div>
</div>
