
<div id="carousel-example-generic" class="carousel slide carousel-fade">
<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php $n=0; foreach($page->images() as $image): ?>
		<li data-target="#carousel-example-generic" data-slide-to="<?php echo $n; $n++; ?>" class="<?php if($n==1) echo ' active' ?>">
<!-- Show a Number for the Indicator -->
			<?php echo $n; ?>
		</li>
		<?php endforeach ?>				
	</ol>
<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<?php $n=0; foreach($page->images() as $image): $n++; ?>
		<div class="item<?php if($n==1) echo ' active' ?>">
			<img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>" class="img-responsive" />
			<div class="carousel-caption">
				<?php echo kirbytext($image->caption()) ?>
			</div>
		</div>
		<?php endforeach ?>
	</div>		
<!-- Controls -->
	
</div>	