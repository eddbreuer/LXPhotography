<div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
			<div class="masonry">

                <?php foreach($photos as $photo) : ?>
    				<div class="item"><a href="<?php echo base_url().'home/carousel_eng/'.$photo['eng_ix']; ?>"><img src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $photo['photo_name'];?>" alt="" onContextMenu="return false;">
                    </div></a>
                <?php endforeach; ?>

			</div>
        </div>
    </div>
</div>