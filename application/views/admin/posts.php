<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-title">This is page with all of the posts</h1>
                <hr>
            <div class="row">
                <?php foreach($posts as $post) : ?>
                    <div class="col-md-6">
                        <h3 class="lx-title"><?php echo $post['title']; ?></h3>
                        <hr>
                        <p><?php echo word_limiter($post['body'], 100); ?></p>
                        <hr>
                        <p><a class="btn btn-default pull-left" href="<?php echo site_url('/admin/post/'.$post['id']); ?>">Edit this Post</a>
                        <?php echo form_open('/admin/delete/'.$post['id']); ?>
    		            &nbsp&nbsp<input type="submit" value="Delete" class="btn btn-danger">
    	                   </form></p>
                        <hr><br><br><hr>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
