<?php

/**
 *
 * @see template_preprocess()
 * @see template_preprocess_toolbar()
 *
 * @ingroup themeable
 */
?>
<?php 
$site_name=variable_get('site_name');
?>
<div class="navbar navbar-default p_toolbar" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <div class="nav navbar-nav">
      <a class="navbar-brand" href="<?php echo $GLOBALS['base_url']; ?>"><?php echo $site_name; ?></a>
      <?php 
        $toolbar['toolbar_home']['#attributes']['class'][]='nav';
        $toolbar['toolbar_home']['#attributes']['class'][]='navbar-nav';

        $toolbar['toolbar_user']['#attributes']['class'][]='nav';
        $toolbar['toolbar_user']['#attributes']['class'][]='navbar-nav';

        $toolbar['toolbar_menu']['#attributes']['class'][]='nav';
        $toolbar['toolbar_menu']['#attributes']['class'][]='navbar-nav';
      ?>
      <?php print render($toolbar['toolbar_user']); ?>
      <?php print render($toolbar['toolbar_menu']); ?>
      <?php if ($toolbar['toolbar_drawer']):?>
        <?php print render($toolbar['toolbar_toggle']); ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="<?php echo $toolbar['toolbar_drawer_classes']; ?>">
    <?php print render($toolbar['toolbar_drawer']); ?>
  </div>
</div>
