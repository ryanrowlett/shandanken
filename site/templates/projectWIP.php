<?php snippet('header') ?>
        <div class="widget center">
            
  <div class="text center">
      
      
    <h1 class="">Live CSS Blur</h1>
    <p>Go ahead, resize me.</p>
      
  </div><!--text center-->
            
            
  <div class="blur">
    <img src="https://images.unsplash.com/photo-1418225043143-90858d2301b4?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=4801291798afca8b66391084f87d24f7" class="bg">
  </div><!--blur-->
</div><!--widget center-->


        <!--my largy bg-->
<?php
// check if the image exists (although select in the field, the image might have been deleted)
if($image = $page->coverimage()->toFile()): ?>
<img src="<?= $image->url() ?>" class="bg">
<?php endif ?>


<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
  <filter id="blur">
    <feGaussianBlur stdDeviation="10" />
  </filter>
</svg>

<!--PARTS-->

<div class="largy">
<?php
// check if the image exists (although select in the field, the image might have been deleted)
if($image = $page->coverimage()->toFile()): ?>
<img src="<?= $image->url() ?>" class="bg">
<?php endif ?>
</div>





<div class="transy col-sm-8 col-lg-5">
	
		<h1><?php echo $page->title()->html() ?></h1>
		
		<div class="text">
			<?php echo $page->text()->kirbytext() ?>
     
			<div class="row">
				<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
			        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
						</a>
					</div>
       <?php endforeach ?>
			</div>
            

			
		</div>
				
	
</div>

