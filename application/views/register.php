<?php  $bgRegister = base_url('img/bg/67716412_large.jpg');?>
<div class="row_2"  style="background: url('<?php echo $bgRegister?>'); background-size: cover;background-position: center">
    <div class="container">
        <div class="col-sm-6 col-sm-offset-6 m-t-40" style="background: #fff;opacity: 0.93;">
            <h6 class="wrap_heading m-t-0 text-center text-red">Register Here</h6>
            <p class="text-center">Note that:, After a successful registration a confirmation mail will be sent to your email, Please endeavour to confirm your ragistration </p>
            <div class="form">
                <?php echo $success ?>
                <?php echo form_open()?>
                <div class="form-group">
                    <?php echo form_error('username')?>
                    <label class="te">Username <small>(Choose a username minimum of 5 characters)</small></label>
                    <input class="form-control no-border-radius" type="text" value="<?php echo set_value('username')?>" name="username" required>
                </div>

                    <div class="form-group">
                        <?php echo form_error('firstname')?>
                        <label class="te">Firstname</label>
                        <input class="form-control no-border-radius" type="text" value="<?php echo set_value('firstname')?>" name="firstname" required>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('lastname')?>
                        <label>Lastname</label>
                        <input class="form-control no-border-radius" type="text" value="<?php echo set_value('lastname')?>" name="lastname" required>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('email')?>
                        <label>Email Address</label>
                        <input class="form-control no-border-radius" type="email" value="<?php echo set_value('email')?>" name="email" required>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('password')?>
                        <label>Password</label>
                        <input class="form-control no-border-radius" type="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('cpassword')?>
                        <label>Confirm Password</label>
                        <input class="form-control no-border-radius" type="password" name="cpassword" required>
                    </div>
                    <div class="form-group">
                        <?php echo form_error('country')?>
                        <label>Your country of Residence</label>
                        <input class="form-control no-border-radius" value="<?php echo set_value('country')?>" name="country" required>
                    </div>


                    <div class="form-input">
                        <?php echo form_error('confirm')?>
                        <label><input type="checkbox" name="confirm" value="Selected" required> By click on here you've agreed to the terms and conditions of Havanaplux</label>
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success no-border-radius" value="Register">
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

