<h1 class="text-center"><?php echo $photo['photo_name']; ?></h1>
<br><br>

<div class="row">
    <div class="col-md-6">
        <br>
        <div class="admin-photo">
            <img class="thumbnail" src="<?php echo base_url().'assets/images/gallery/'.$photo['photo_name'] ?>" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="">
            <?php echo form_open('admin/photo_update'); ?>
                <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $photo['id']; ?>">
                </div>

                <div class="form-group">
                <label>Photo Title (you can't edit title of the image)</label><br>
                <label><?php echo base_url().'assets/images/gallery/'.$photo['photo_name']; ?></label>
                </div>
                    <br>
                <div class="form-group">
                <label>Alt</label>
                <input type="text" class="form-control" name="alt" placeholder="Add Alternative Text " value="<?php echo $photo['alt']; ?>">
                </div>
                    <br>
                <div class="form-group">
                <label>Caption</label>
                <input type="text" class="form-control" name="caption" placeholder="Add caption " value="<?php echo $photo['caption']; ?>">
                </div>
                    <br>
                    <label>Type of Photography</label>
                    <select class="form-control" name="type" value="<?php echo $photo['type']; ?>">
                      <option>wedding</option>
                      <option>engagement</option>
                      <option>branding</option>
                      <option>boudoir</option>
                    </select>
                    <br>
                    <label>This Photo will be displayed in those Galleries</label><br>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="display_home" value="1" <?php if ($photo['display_home'] == 1) echo "checked='checked'"; ?>/> home
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox2" name="display_wed" value="1" <?php if ($photo['display_wed'] == 1) echo "checked='checked'"; ?>/> wedding
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="display_eng" value="1" <?php if ($photo['display_eng'] == 1) echo "checked='checked'"; ?>/> engagement
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="display_bou" value="1" <?php if ($photo['display_bou'] == 1) echo "checked='checked'"; ?>/> boudoir
                    </label>
                    <br><br>
                <button type="submit" class="btn btn-default">Submit</button>
                <a class="btn btn-default" href="<?php echo base_url().'admin/delete_photo/'.$photo['id']; ?>" role="button">Delete</a>
            </form>
        </div>
    </div>
</div>
