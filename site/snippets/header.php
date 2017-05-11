<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $site->language() ?>"> <!--<![endif]-->
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
    

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
    
      

  <?php echo css('assets/css/bootstrap.min.css') ?>
    <?php echo css('assets/css/cover.css') ?>
   <?php echo css('assets/css/navbar-fixed-side.css') ?>
  <?php echo css('assets/css/main.css') ?>
     <?php echo css('assets/css/ekko-lightbox.css') ?>
   
    <?php echo '<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>'?>
    <?php echo '<script type="text/javascript" src="assets/js/bootstrap.js"></script>'?>
     <?php echo '<script type="text/javascript" src="assets/js/carousel.js"></script>'?>
    <?php echo '<script type="text/javascript" src="assets/js/ekko-lightbox.js"></script>'?>

    
    <script type="text/javascript">
  var $ = jQuery.noConflict();
  $(document).ready(function() { 
      $('#carousel-example-generic').carousel({ interval: 3000, cycle: true, pause: false });
  }); 
</script>
     <script type="text/javascript">
     $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
    </script>
    


</head>
<body>
    
 
    
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
<div class="container-fluid">
      
    
    
  <div class="row">
      
      
    <div class="col-sm-3 col-lg-2">
      <nav class="navbar navbar-default navbar-fixed-side">
          <div class="container">
              <div class="navbar-header">
                 <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="<?php echo $site->url() ?>"><img src="<?php echo url('assets/images/logoSM.png') ?>" alt="<?php echo $site->title()->html() ?>" class="img-responsive" /></a>
              </div>
		
	    <?php snippet('menu') ?>
          
        
        </nav>
                </div>
    

          