<div id="branding" class="row">
	<div class="col-md-12">
		<div class="col-md-12">
			<?php if ($tabs): ?>
				<div class="tabs"><?php print render($tabs); ?></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<div id="page" class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php print render($page['content']); ?>
	</div>
</div>