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

    <?php print $form; ?>

		<div id="valet-results" class="valet-results"></div>

    <div class="valet-close"></div>

	</div>
</div>
