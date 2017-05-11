<?php snippet('header') ?>

<div class="col-sm-9 col-lg-10">

    
     <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
            
                    <!--my largy bg-->
<?php
// check if the image exists (although select in the field, the image might have been deleted)
if($image = $page->coverimage()->toFile()): ?>
<img src="<?= $image->url() ?>" class="bg">
<?php endif ?>
    

         <!--  <div class="masthead clearfix">
           <div class="inner">
              <h3 class="masthead-brand">Cover</h3>
              
            </div>
          </div>

         <!-- <div class="inner cover">
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div> -->

         <!-- <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div> -->

        </div>

      </div>

    </div>



	

	


