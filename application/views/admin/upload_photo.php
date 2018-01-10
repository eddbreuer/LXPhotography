
<div class="">

    <h1 class="text-center">Upload photo here</h1>
    <h2 class="text-center">Please fill all fields before selecting photo to upload</h2>
    <br><br><hr><br>
    <?php echo validation_errors(); ?>
    <?php echo $error; ?>

    <?php echo form_open_multipart('admin/upload_photo'); ?>
        <div class="row">
            <div class="col-md-6">
                <h3>Upload Photo</h3>
                <br>
                <div class="form-group">
                    <label>Alternative text</label>
                    <input type="text" class="form-control" name="alt" value="" placeholder="Add alternative text">
                </div>
                <div class="form-group">
                    <label>Caption</label>
                    <input type="text" class="form-control" name="caption" value="" placeholder="Add caption">
                </div>

                    <div class="">
                        <label>Type of Photography</label>
                        <select class="form-control" name="type" value="" placeholder="Type">
                          <option>wedding</option>
                          <option>engagement</option>
                          <option>branding</option>
                          <option>boudoir</option>
                        </select>
                    </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h3>Upload Photo</h3>
                <br>
                <div class="">
                    <label>This Photo will be displayed in those Galleries</label><br><br>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="display_home" value="1"> home
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox2" name="display_wed" value="1"> wedding
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="display_eng" value="1"> engagement
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="display_bou" value="1"> boudoir
                    </label>
                </div>
                <br>
                <div class="form-group">
                   <label>Photo Upload</label>
                   <br>
                   <input type="file" name="userfile" size="20">
                   <p class="help-block">Choose photo to upload</p>
                 </div>
                 <br>
<button type="submit" class="btn btn-default btn-block">Submit</button>
            </div>

        </div>




    </form>











</div>
