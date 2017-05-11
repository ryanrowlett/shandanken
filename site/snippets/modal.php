<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title"><?php echo $page->name()->html() ?></h4>
      </div>
      <div class="modal-body">
        
          
		
			<?php echo $page->text()->kirbytext() ?>
          <a class="btn btn-primary" href="<?php echo $page->destination()->html() ?>" role="button"><?php echo $page->button()->html() ?></a>
          
		
          
      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>

