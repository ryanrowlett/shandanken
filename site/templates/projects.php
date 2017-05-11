<?php snippet('header') ?>

<div class="transy col-sm-8 col-lg-5">

	
		<div class="text">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
    <hr>
    <?php snippet('projects') ?>
    
          <?php
// check if the image exists (although select in the field, the image might have been deleted)
if($image = $page->coverImage()->toFile()): ?>
<img src="<?= $image->url() ?>" class="bg">
<?php endif ?>
	
    
</div>
