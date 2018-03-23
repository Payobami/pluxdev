<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Havanaplux</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap_3.css">-->
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/scroller.css">

</head>
<body style="">

<div class="row_1">
    <div class="" style="z-index: 100 !important;">
        <nav class="navbar navbar-white navbar-offcanvas">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="">
                    <button style="width: 15%;float: left" type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div>
                        <a style="font-family: 'Abril Fatface', sans-serif; margin-left: -5px;margin-right: 0px" class="navbar-brand f-s-22 text-center visible-xs" href="#">  Havana<strong class="text-red">Plux</strong></a>
                    </div>

                    <?php if(isset($this->session->loginSession)):?>
                        <div class="">
                        <div class="menuBar">
                            <div class="visible-xs text-center p-l-20">
                                <ul class="" style="">
                                    <li class="dropdown" style="margin-right: 5px">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <img class="" src="<?php echo base_url()?>user_pic/avatar_280x280.png" width="25" style="margin-top:-7px">
                                        </a>
                                        <ul class="dropdown-menu no-border-radius" aria-expanded="true" style="min-height: 300px;">
                                            <div class="dropLayout">
                                                <ul>
                                                    <li><a href=""> New Story</a></li>
                                                    <li><a href=""> Stories</a></li>
                                                    <li><a href=""> My Points</a></li>
                                                    <li><a href=""> Publications</a></li>
                                                    <li><a href=""> Profile</a></li>
                                                    <li><a href=""> Settings</a></li>
                                                    <li><a href="<?php echo base_url('authentication/logout')?>"> Sign out </a></li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown" style="width: 20px !important; margin-right: 5px">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="glyphicon glyphicon-bell"></i>
                                        </a>

                                        <ul class="dropdown-menu no-border-radius" aria-expanded="true" style="min-height: 200px;z-index: 100000000;margin-left: -70px">
                                            <div class="dropLayout">
                                                <ul>
                                                    <li><a>No notification</a></li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </li>
                                    <li style="width: 20px !important;">
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Publish a New Story"><i class="glyphicon glyphicon-pencil"></i> </a>
                                    </li>
                                    <!-- <li><a href="login.html"> Login </a></li>
                                     <li><a href="register.html"> Register </a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="z-index: 99999999999999999999">
                    <div class="visible-xs">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="#" class="active">Home</a> </li>

                            <?php

                                //get all the category from the table

                            $this->db->where("status='0'");
                            //echo $this->db->count_all_results('plux_category');
                            $getCat = $this->db->get('plux_category')->result_array();

                            foreach($getCat as $cat):
                            ?>

                                <li><a href="<?php echo base_url('category/').str_replace(' ','-', $cat['cat_name']).'/'.$cat['cat_uid'] ?>"><?php echo $cat['cat_name'] ?></a> </li>

                            <?php endforeach?>

                            <?php if(!isset($this->session->loginSession)):?>
                                <li><a href="<?php echo base_url('authentication/login')?>"> Login </a></li>
                                <li><a href="<?php echo base_url('authentication/register')?>"> Register </a></li>
                            <?php endif  ?>

                        </ul>
                    </div>


                    <div class="col-sm-3 hidden" hidden>
                        <ul class="nav navbar-nav chover p-t-20">
                            <li class="p-t-3" style="border: 1px solid #d2d2d2;height: 30px; background: #f2f2f2; border-radius: 15px"><a href="#" style="margin-top: -20px">Havanacoin.co <span class="sr-only">(current)</span></a></li>
                            <!--<li><a href="#">New</a></li>
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">Rated</a></li>-->
                        </ul>
                    </div>

                    <div class="col-sm-4 col-sm-offset-4 hidden-xs text-center">
                        <div class="middle-logo text-center">
                            <a href=""><h6> <img src="<?php echo base_url()?>img/logo/logo.png" width="30"> Havana<span>Plux</span></h6></a>
                        </div>
                    </div>


                    <div class="col-sm-4 hidden-xs" style="z-index: 99999999999999999999">
                        <ul class="nav navbar-nav navbar-right user-right" style="z-index: 99999999100000 !important;">
                            <?php if(isset($this->session->loginSession)):?>

                            <li class="dropdown" style="z-index: 99999999999999999999">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <img class="" src="<?php echo base_url()?>user_pic/avatar_280x280.png" width="25" style="margin-top:-7px">
                                </a>

                                <ul class="dropdown-menu no-border-radius" aria-expanded="true" style="min-height: 300px; z-index: 999999999999999999999">
                                    <div class="dropLayout">
                                        <ul>
                                            <li><a href=""> New Story</a></li>
                                            <li><a href=""> Stories</a></li>
                                            <li><a href=""> My Points</a></li>
                                            <li><a href=""> Publications</a></li>
                                            <li><a href=""> Profile</a></li>
                                            <li><a href=""> Settings</a></li>
                                            <li><a href="<?php echo base_url('authentication/logout')?>"> Sign out </a></li>
                                        </ul>

                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="glyphicon glyphicon-bell"></i>
                                </a>

                                <ul class="dropdown-menu no-border-radius" aria-expanded="true" style="min-height: 200px;z-index: 100000000;width: 250px">
                                    <div class="dropLayout">
                                        <ul>
                                            <li><a>No notification</a></li>
                                        </ul>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Publish a New Story"><i class="glyphicon glyphicon-pencil"></i> </a>
                            </li>
                            <?php endif ?>


                            <?php if(!isset($this->session->loginSession)):?>
                                <li><a href="<?php echo base_url('authentication/login')?>"> Login </a></li>
                                <li><a href="<?php echo base_url('authentication/register')?>"> Register </a></li>
                            <?php endif  ?>
                        </ul>
                    </div>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>


<div class="menuBar" style="z-index: -4 !important;">
    <div class="container" style="z-index: 3 ;position: relative;">
        <div class="pn-ProductNav_Wrapper" style="">
            <nav id="pnProductNav" class="pn-ProductNav dragscroll" style="z-index: 1;position:relative;">
                <div id="pnProductNavContents" class="pn-ProductNav_Contents">

                    <a href="<?php echo base_url()?>" class="pn-ProductNav_Link" aria-selected="true">Home</a>

                    <?php
                    //get all the category from the table

                    $this->db->where("status='0'");
                    //echo $this->db->count_all_results('plux_category');
                    $getCat = $this->db->get('plux_category')->result_array();

                    foreach($getCat as $cat):
                    ?>

                    <a href="<?php echo base_url('category/'). str_replace(' ','-', $cat['cat_name']).'/'.$cat['cat_uid'] ?>" class="pn-ProductNav_Link"><?php echo $cat['cat_name'] ?></a>

                    <?php endforeach ?>

                    <span id="pnIndicator" class="pn-ProductNav_Indicator"></span>
                </div>
            </nav>
            <button id="pnAdvancerLeft" class="pn-Advancer pn-Advancer_Left m-t-10" type="button">
                <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 551 1024"><path d="M445.44 38.183L-2.53 512l447.97 473.817 85.857-81.173-409.6-433.23v81.172l409.6-433.23L445.44 38.18z" /></svg>
            </button>
            <button id="pnAdvancerRight" class="pn-Advancer pn-Advancer_Right m-t-10" type="button">
                <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 551 1024"><path d="M105.56 985.817L553.53 512 105.56 38.183l-85.857 81.173 409.6 433.23v-81.172l-409.6 433.23 85.856 81.174z" /></svg>
            </button>
        </div>
    </div>
</div>
