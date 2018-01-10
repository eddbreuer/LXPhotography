<div id="sortable" class="masonry">
    <?php foreach($photos as $photo) : ?>
        <div class="item"id="item_<?php echo $photo['id']; ?>" order="<?php echo $photo['eng_ix'] ?>"><img src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $photo['photo_name'];?>" alt="" onContextMenu="return false;"></div></a>

            <?php endforeach; ?>
</div>




<script>
$(document).ready(function(){
    $('#sortable').sortable({
        update: function(event, ui){
        var list = $('#sortable').sortable('serialize');
            $.ajax(
                {
                url: "<?php echo base_url(); ?>index.php/admin/eng_ix_order",
                type: 'POST',
                data: list,
                success: function (result) {
                }
            });
        }
    });
});
</script>
