<div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-title">Helpful Articles</h1>
                <hr>
            <div class="row">
                <?php foreach($posts as $post) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <h3 class="lx-title"><?php echo $post['title']; ?></h3>
                    <hr>
                    <p><?php echo word_limiter($post['body'], 100); ?></p>
                    <p><a class="btn btn-default btn-block" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>


                </div>
                <?php endforeach; ?>
                <!-- ================================================ -->


                <!-- =============================================== -->
            </div>

        </div>
    </div>
</div>
