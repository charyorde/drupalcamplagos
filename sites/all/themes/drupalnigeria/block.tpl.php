<?php // $Id: block.tpl.php,v 1.1.2.1.2.2 2009/04/02 23:52:40 couzinhub Exp $ ?>

<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?> <?php print $orig_module ?>">  
    
    <?php if ($block->subject): ?>
      <h2 class="title"> <?php print $block->subject; ?> </h2>
    <?php endif; ?>
    
    <div class="content">
      <?php print $block->content; ?>
    </div>  
    <?php //print_r($block)?>  
</div>
