<?php snippet('header') ?>

<div class="transy col-sm-8 col-lg-5">

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->year() ?>
      </div>
      <hr />
    </header>
    
    <div class="text wrap">
      
      <?= $page->text()->kirbytext() ?>

      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      
    </div>
    

                <?php
// check if the image exists (although select in the field, the image might have been deleted)
if($image = $page->coverImage()->toFile()): ?>
<img src="<?= $image->url() ?>" class="bg">
<?php endif ?>
	
      
    <?php snippet('prevnext') ?>

  </main>
    
</div>
