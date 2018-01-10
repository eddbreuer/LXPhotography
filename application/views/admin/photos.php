<div class="row">
<?php echo validation_errors(); ?>
    <?php foreach($photos as $photo) : ?>

    <div class="col-md-6">
        <a class="" href="<?php echo base_url().'admin/photo/'.$photo['id']; ?>">
                <div class="admin-gallery">
                    <p><em><?php echo $photo['photo_name']; ?></em></p>
                    <div class="admin-gl-img pull-left">
                        <img class="img-responsive thumbnail"src="<?php echo base_url().'assets/images/gallery/'. $photo['photo_name']; ?>" alt="">
                    </div>
                    <div class="">

                        <p><strong>Alt text:</strong> <?php echo $photo['alt'] ?></p>
                        <p><strong>Caption:</strong> <?php echo $photo['caption'] ?></p>
                        <p><strong>Type:</strong> <?php echo $photo['type'] ?></p>
                        <p><strong>Galleries:</strong>
                            <?php if ($photo['display_home'] == 1){
                                echo 'home  '.$photo['home_ix'].', ';
                            } ?>
                            <?php if ($photo['display_wed'] == 1){
                                echo 'wedding  '.$photo['wed_ix'].', ';
                            } ?>
                            <?php if ($photo['display_eng'] == 1){
                                echo 'engagement  '.$photo['eng_ix'].', ';
                            } ?>
                            <?php if ($photo['display_bou'] == 1){
                                echo 'boudoir  '.$photo['bou_ix'].', ';
                            } ?>
                         </p>



                    </div>
                </div>
        </a>
    </div>

    <?php endforeach ?>






</div>
