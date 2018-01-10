<div class="container" id="main">
    <img class="img-responsive" width="" src="<?php echo base_url(); ?>assets\images\IMG-7843.jpg" alt="">

<div class="container">
    <br>
    <hr>
    <br>


<div class="row">
    <div class="col-md-6">
<?php echo validation_errors(); ?>
<?php echo form_open('contact/send_email'); ?>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label>Phone(if you would like us to call you)</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter your phone">
        </div>

        <label>Please let us know how we can help</label>
        <textarea class="form-control" name="message" rows="11"></textarea>
        <br><br>
        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-default btn-block">Send</button>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="well text-center">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets\images\LX_Logo.png" style="width: 50%; margin: 0 auto" alt="">

            <br><br>
            <div class="">
                <h1 class="lx-title">LX PHOTOGRAPHY</h1>
                <h3 class="lx-title">ART | STYLE | FOREVER</h3>
                <br>
                <h5>Tel: 727-916-1500</h5>
                <h5>260 1st. Ave S, St. Petersburg FL 33701</h5>
            </div>
        </div>
    </div>
    <br>
</div>
</form>
<br><br><br>
</div>
<div class="contact-ribbon">

</div>

</div>
