<div class="row">
	
	<?php foreach(page('projects')->children()->visible()->limit(100) as $project): ?>
    

    
		<div class="col-sm-12">
            <h2><?php echo $project->title()->html() ?></h2>
            <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
				<a href="<?php echo $project->url() ?>" class="thumbnail">
					<img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
				</a>
			<?php endif ?>
			<p><?php echo $project->text()->excerpt(1000) ?></p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			
		</div>
	<?php endforeach ?>
</div>
