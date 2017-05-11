<?php snippet('header') ?>

<div class="transy col-sm-8 col-lg-5">
        <div class="widget center">
            
  <div class="center">
      
      <div class="contents">
   		<h1><?php echo $page->title()->html() ?></h1>
          
          <div class="intro">
              <?php echo $page->intro()->kirbytext() ?></div>
		
		<div class="text">
            <?php echo $page->text()->kirbytext() ?>
     

            </div>

			
		</div>
      
  </div><!--text center-->
            
            
  <div class="blur">
    <?php
// check if the image exists (although select in the field, the image might have been deleted)
if($image = $page->coverimage()->toFile()): ?>
<img src="<?= $image->url() ?>" class="bg">
<?php endif ?>
  </div><!--blur-->
</div><!--widget center-->
    



        <!--my largy bg-->
<?php
// check if the image exists (although select in the field, the image might have been deleted)
if($image = $page->coverimage()->toFile()): ?>
<img src="<?= $image->url() ?>" class="bg">
<?php endif ?>
    
   


<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
  <filter id="blur" x="0%" y="0%" width="100%" height="100%">
    <feGaussianBlur in="SourceGraphic" stdDeviation="20" />
      <feComponentTransfer>
      <feFuncA type="discrete" tableValues="1 1"/>
   </feComponentTransfer>
  </filter>
</svg>


 </div>


	


