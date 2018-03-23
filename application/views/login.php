<?php  $bgLogin = base_url('img/bg/16509931_large1300.jpg')?>
<div  style="background: url('<?php echo $bgLogin ?>'); background-size: cover;background-position: center">
    <div class="container">
        <div class="col-sm-4 col-sm-offset-8 m-t-40 m-b-35" style="background: #fff;opacity: 0.98; box-shadow: 0 0 2px 3px #cf7544">
            <h6 class="wrap_heading m-t-0 f-s-22 text-center text-red">Login Here</h6>
            <p class="text-center"> Login with your Username or Email and Password</p>
            <div class="form">
                <?php echo $success ?>
                <?php echo form_open()?>
                    <div class="form-group">
                        <?php echo form_error('login_id')?>
                        <label>Username or Email </label>
                        <input class="form-control no-border-radius" type="" name="login_id" required>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('password')?>
                        <label>Password</label>
                        <input class="form-control no-border-radius" type="password" name="password" required>
                    </div>

                    <div class="form-input">

                        <label><input type="checkbox" name="confirm"> Remember me</label>
                        <a href="forgot.html" class="pull-right text-green">Forgot Password</a>
                    </div>
                    <br>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-sm btn-success no-border-radius" value="Login">
                    </div>
                <?php echo form_close()?>
            </div>
        </div>

    </div>
</div>
