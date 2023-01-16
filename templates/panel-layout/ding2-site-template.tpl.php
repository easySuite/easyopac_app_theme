<?php

/**
 * @file
 * Ddbasic implementation to present a Panels layout.
 */
?>
<a href="#main-content" class="skip-link">
  <?php print t('Skip to main content'); ?>
</a>
<div id="page<?php print $css_id ? " $css_id" : ''; ?>" class="<?php print $classes; ?>">
  <div class="content-wrapper js-content-wrapper" id="main-content" role="main">
    <div class="content-inner">
      <?php print render($content['content']); ?>
    </div>
  </div>

  <?php if (!empty($content['footer'])): ?>
    <footer class="footer">
      <div class="footer-inner">
        <?php print render($content['footer']); ?>
      </div>
    </footer>
  <?php endif; ?>

  <?php if (!empty($content['bottom'])): ?>
    <div class="bottom">
      <?php print render($content['bottom']); ?>
    </div>
  <?php endif; ?>

</div>
