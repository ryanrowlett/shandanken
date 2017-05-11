<?php snippet( 'header') ?>


	<div class="row main">
        
             <?php foreach(page('$page')->children()->visible()->limit(100) as $subpage): ?>
        
  <a href="<?php echo $subpage->url(); ?>"></a>
    
      <div class="container">
 <?php echo $subpage->name()->html(); ?><br>
        <em><?php echo $subpage->title()->html(); ?></em>
      </div>
    </div>

<?php endforeach; ?>
        
        





