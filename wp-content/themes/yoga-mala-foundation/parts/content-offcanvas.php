<div class="off-canvas position-top" id="off-canvas" data-off-canvas>
	<?php
	if (is_page_template('homepage.php')) {
			homepage_off_canvas_nav();
	}
	else {
		joints_off_canvas_nav();
	} ?>
</div>