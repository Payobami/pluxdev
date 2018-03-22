<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome HavanaPlux AirDrop</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('css/')?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('css/')?>havana_plux.css">



</head>
<body>

<div class="row1">


</div>

<div class="row2">

    <div class="container">

        <div class="col-sm-6 col-sm-off-3" style="color: #fff;">
            <h2 style="margin: 0;color: #fff">Havana Plux Airdrop<br></h2>
            <p>A  Rewarding Decentralized platform</p>
            <p>(A great cryptocurrency tool for blockchain mass adoption)</p>

            <div class="text-center" style="margin-left: 60px">
                <p>
                    100,000 HVC tokens to be distributed
                    Join now and get your Havanaplux account funded when launched.

                    <br>
                    powered by Havanacoin (HVC)
                    <br>
                    <a href="https://havanacoin.co" target="new" style="color: #f00;">Read more... </a>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row3 row" style="min-height: 400px">




        <div class="col-sm-6">
            <?php echo $success ?>
            <?php echo validation_errors() ?>
            <h4>Complete the short task below and fill out the form with your details</h4>
            <small> Qualified members will be credited immediately  after the lunch of Havanaplux Beta version</small>
            <?php echo form_open()?>
            <div class="form" style="margin-top: 30px;">
                <div class="form-group">
                    <label>Fist Name</label>
                    <input name='firstname' value="<?php echo set_value('firstname')?>" type="text" required class="form-control">
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input name='lastname' type="text" value="<?php echo set_value('lastname')?>" required class="form-control">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name='email' value="<?php echo set_value('email')?>" required class="form-control">
                </div>

                <div class="form-group">
                    <label>Telegram Username</label>
                    <input type="text" required name='telegram' value="<?php echo set_value('telegram')?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>ETH Address</label>
                    <input type="text" required name='eth' value="<?php echo set_value('eth')?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Your Country of Residence</label>
                    <input type="text" required name='country' value="<?php echo set_value('country')?>" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" style="width: 100%" value="Join Airdrop">
                </div>
            </div>

            <?php echo form_close()?>
        </div>


        <div class="col-sm-6">

            <h4 class="text-center">Join our Social Medial Network</h4>

            <div class="text-center">
                <a href="https://t.me/joinchat/AAAAAEmVJnGzy3lmn641-A" target="new">
                    <img src="<?php echo base_url('img/telegram.jpg')?>" width="300" class="text-center">
                </a>
            </div>
            <div class="text-center" style="margin-top: 30px">
                <a href="https://twitter.com/havanacoin" target="new">
                    <img src="<?php echo base_url('img/twitter.jpg')?>" width="300" class="text-center">
                </a>
            </div>


            <!--<div class="text-center" style="margin-top: 30px">
                <a href="" target="new">
                    <img src="<?php /*echo base_url('img/facebook.png')*/?>" width="300" class="text-center">
                </a>
            </div>-->



        </div>



    </div>



</div>


</body>
</html>
