<div id="branding" class="row">
	<div class="col-md-12">
		<?php print $breadcrumb; ?>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
			  <h1 class="page-title"><?php print $title; ?></h1>
			<?php endif; ?>
			<?php print render($title_suffix); ?>
		</div>
		<div class="col-md-6">
			<?php if ($tabs): ?>
				<div class="tabs"><?php print render($tabs); ?></div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div id="page" class="row">
	<div class="col-md-12">
		<div class="wrapCont">

			<div id="content" class="clearfix">
			<div class="element-invisible"><a id="main-content"></a></div>
				<?php if ($messages): ?>
					<div id="console" class="clearfix"><?php print $messages; ?></div>
				<?php endif; ?>
				<?php if ($page['help']): ?>
					<div id="help">
						<?php print render($page['help']); ?>
					</div>
				<?php endif; ?>
				<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
				<?php print render($page['content']); ?>
			</div>

			<div id="footer">
				<?php print $feed_icons; ?>
			</div>

		</div>

	</div>
</div>