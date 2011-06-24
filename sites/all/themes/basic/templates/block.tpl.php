<div id="block-<?php print $block->module .'-'. $block->delta ?>" class="<?php print $block_classes . ' ' . $block_zebra; ?>">
  <div class="block-inner">


    <div class="content">
      <?php print $block->content; ?>
    </div>

    <?php print $edit_links; ?>

  </div> <!-- /block-inner -->
</div> <!-- /block -->