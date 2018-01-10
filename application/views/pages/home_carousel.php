<div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
			<div class="mycarousel">

<?php
for($i=1;$i<$offset;$i++){
$photos[] = array_shift($photos);
}
 ?>
					<div id="owl-demo" class="owl-carousel owl-theme">

                        <?php foreach($photos as $photo) : ?>
						  <div class="item"><img src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $photo['photo_name'];?>" alt="" onContextMenu="return false;"></div>

                        <?php endforeach; ?>

					</div>

			</div>
        </div>
    </div>
</div>
	</div>
