<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-title">You can edit this post here</h1>
                <hr>
                    <?php echo form_open('admin/update'); ?>
                        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                        <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
                        <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" name="created" placeholder="Add Title" value="<?php echo date('F/j/Y', strtotime($post['created'])); ?>">
                        </div>
                        <div class="form-group">
                        <label>Body</label>
                        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
        </div>
    </div>
</div>
    <script>
            CKEDITOR.replace( 'editor1' );
        </script>
